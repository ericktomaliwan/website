/**
 * This file holds The SEO Framework plugin's JS code for the UI Tabs.
 * Serve JavaScript as an addition, not as an ends or means.
 *
 * @author Sybre Waaijer <https://cyberwire.nl/>
 * @link <https://wordpress.org/plugins/autodescription/>
 */

/**
 * The SEO Framework plugin
 * Copyright (C) 2020 - 2024 Sybre Waaijer, CyberWire B.V. (https://cyberwire.nl/)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 3 as published
 * by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

'use strict';

/**
 * Holds tsfTabs values in an object to avoid polluting global namespace.
 *
 * No jQuery. Cool.
 *
 * @since 4.1.3
 *
 * @constructor
 */
window.tsfTabs = function () {

	/**
	 * @since 4.1.3
	 * @access protected (readonly)
	 * @see tsfTabs.getStack()
	 * @type {(Map<string,*>)} The argument stack for ID.
	 */
	const tabStack = new Map();

	/**
	 * @since 4.1.3
	 * @access private
	 * @type {(Map<string,*>)} The cache.
	 */
	const _toggleCache = new Map();

	/**
	 * Sets the correct tab based on selected radio button prior window.history navigation.
	 *
	 * @since 4.1.3
	 * @access private
	 */
	function _correctTabFocus() {
		let changeEvent = new Event( 'change' );

		tabStack.forEach( args => {
			if ( ! args.fixHistory ) return;
			document.querySelectorAll( `.${args.HTMLClasses.tabRadio}:checked` ).forEach( el => {
				el.dispatchEvent( changeEvent );
			} );
		} );
	}

	/**
	 * Hides a tab. Also switches to the first tab if it was selected.
	 *
	 * @since 5.0.5
	 * @access public
	 *
	 * @param {String} stackId The stack ID for which to get the stack.
	 * @param {String} name    The name of the tab to hide.
	 */
	function hideTab( stackId, name ) {

		const stack = getStack( stackId );

		const radio = document.getElementById( name );

		radio?.setAttribute( 'disabled', '' );
		document.querySelector( `.${stack.HTMLClasses.tabLabel}[for="${name}"]` )?.classList.add( 'hidden' );

		if ( radio?.checked ) {
			// 'toggleTo' won't do because the transition stack memory might not be initialized via a change-event... should we simulate the event?
			toggleToInstant(
				stackId,
				// Separate queries because :not in closest() will select first only.
				radio.closest( `.${stack.HTMLClasses.wrapper}` )?.querySelector( `.${stack.HTMLClasses.tabRadio}:not([disabled])` )
			);
		}
	}

	/**
	 * Shows a tab.
	 *
	 * @since 5.0.5
	 * @access public
	 *
	 * @param {String} stackId The stack ID for which to get the stack.
	 * @param {String} name    The name of the tab to show.
	 */
	function showTab( stackId, name ) {

		const stack = getStack( stackId );

		document.getElementById( name )?.removeAttribute( 'disabled' );
		document.querySelector( `.${stack.HTMLClasses.tabLabel}[for="${name}"]` )?.classList.remove( 'hidden' );
	}

	/**
	 * Toggles a tab.
	 *
	 * @since 5.0.5
	 * @access public
	 *
	 * @param {String}   stackId The stack ID for which to get the stack.
	 * @param {String}   name    The name of the tab to show.
	 * @param {?Boolean} toggle  Whether to show (true), hide (false), or automatically determine (?null).
	 */
	function toggleTab( stackId, name, toggle ) {

		if ( void 0 == toggle ) {
			if ( document.getElementById( name )?.disabled ) {
				showTab( stackId, name );
			} else {
				hideTab( stackId, name );
			}
		} else if ( toggle ) {
			showTab( stackId, name );
		} else {
			hideTab( stackId, name );
		}
	}

	/**
	 * Toggles a tab instantly, without animations.
	 *
	 * @since 4.1.3
	 * @access public
	 *
	 * @param {string}           stackId The stack family ID.
	 * @param {HTMLInputElement} target  The radio input element of the tab.
	 */
	function toggleToInstant( stackId, target ) {

		const stack      = getStack( stackId ),
			  newContent = document.getElementById( `${target.id}-content` ),
			  radio      = document.getElementById( target.id );

		radio.checked = true;

		if ( newContent && ! newContent.classList.contains( stack.HTMLClasses.activeTabContent ) ) {
			// Toggle all active content's HTML classes.
			document.querySelectorAll( `.${target.name}-content` ).forEach( element => {
				element.classList.remove( stack.HTMLClasses.activeTabContent );
			} );

			newContent.classList.add( stack.HTMLClasses.activeTabContent );
		}

		radio.dispatchEvent( stack.tabToggledEvent );
	}

	/**
	 * Toggles a tab with animations.
	 *
	 * @since 4.1.3
	 * @access public
	 *
	 * @param {string}           stackId The stack family ID.
	 * @param {HTMLInputElement} target  The radio input element of the tab.
	 */
	function toggleTo( stackId, target ) {

		const cacheId = target.name;
		const stack   = getStack( stackId );

		const fadeOutTimeout = 125;
		const fadeInTimeout  = 175;

		const container  = _toggleCache.get( 'container' ).get( cacheId );
		const allContent = document.querySelectorAll( `.${target.name}-content` );

		const lockHeight = () => {
			container.style.boxSizing = 'border-box'; // FIXME this won't cause issues, right...? Ugh.
			container.style.minHeight = `${container.getBoundingClientRect().height}px`;
		}
		const unLockHeight = () => {
			container.style.minHeight = '';
		}

		const setCorrectTab = async () => {
			let newContent = document.getElementById( `${_toggleCache.get( 'target' ).get( cacheId )}-content` );

			// Lock height, so to prevent jumping.
			lockHeight();
			allContent.forEach( el => { el.classList.remove( stack.HTMLClasses.activeTabContent ) } );

			newContent.classList.add( stack.HTMLClasses.activeTabContent );
			unLockHeight();
			tsfUI.fadeIn( newContent, fadeInTimeout );

			// Resolve early at 2/3th of fade-in time, content should already be well visible.
			await tsfUtils.delay( fadeInTimeout * 2/3 );

			return testTab(); // do not pass newContent!
		}
		const testTab = async () => {
			// Regain this value from a new query, for the toggle's target-cache might've changed.
			let newContent = document.getElementById( `${_toggleCache.get( 'target' ).get( cacheId )}-content` );

			// Test if the correct tab has been set--otherwise, try again.
			if ( ! newContent || newContent.classList.contains( stack.HTMLClasses.activeTabContent ) ) {
				clearPromise();
				document.getElementById( _toggleCache.get( 'target' ).get( cacheId ) )
					.dispatchEvent( stack.tabToggledEvent );
			} else {
				// Lock height isothermically to prevent jumping.
				lockHeight();
				// Hide everything instantly. We don't make false promises here.
				allContent.forEach( el => { el.classList.remove( stack.HTMLClasses.activeTabContent ) } );
				// Loop until successful. Use animationFrame so to not clog up the CPU if this lands in an infinite loop.
				requestAnimationFrame( () => {
					setCorrectTab() && clearPromise()
				} );
			}
		}

		const doPromise = () => new Promise( async resolve => {
			allContent.forEach( el => { tsfUI.fadeOut( el, fadeOutTimeout ) } );
			// Await fadeout before continuing (with fadeIn at setCorrectTab).
			await tsfUtils.delay( fadeOutTimeout );

			return setCorrectTab() && resolve();
		} );
		const clearPromise = () => _toggleCache.get( 'promises' ).delete( cacheId );

		const runPromise = () => {
			if ( _toggleCache.get( 'promises' ).has( cacheId ) ) return;

			_toggleCache.get( 'promises' ).set( cacheId, doPromise );
			_toggleCache.get( 'promises' ).get( cacheId )();
		}
		runPromise();
	}

	/**
	 * Toggle tab on tab-radio-change browser event.
	 *
	 * @since 4.1.3
	 * @access private
	 *
	 * @param {String} stackId
	 * @param {Event}  event
	 */
	function _toggle( stackId, event ) {

		const stack = getStack( stackId );

		const currentToggle = event.target;
		const onload        = ! event.isTrusted;

		const toggleId   = event.target.id;
		const toggleName = event.target.name;

		const cacheId = toggleName;

		_toggleCache.get( 'wrap' ).has( cacheId ) || (
			_toggleCache.get( 'wrap' ).set( cacheId, currentToggle.closest( `.${stack.HTMLClasses.wrapper}` ) )
		);

		const previousToggle = _toggleCache.get( 'wrap' ).get( cacheId ).querySelector( `.${stack.HTMLClasses.activeTab}` );

		if ( ! onload ) {
			// Perform validity check, this prevents non-invoking hidden browser validation errors.
			// On failure, no tab-switching will happen: the previous tab will become reactivated.
			const invalidInput = document.querySelector( `.${stack.HTMLClasses.activeTabContent} :invalid` );
			if ( invalidInput ) {
				invalidInput.reportValidity();

				if ( previousToggle )
					previousToggle.checked = true;

				currentToggle.checked = false;

				event.stopPropagation();
				event.preventDefault();
				return false;
			}
		}

		if ( previousToggle ) {
			previousToggle.classList.remove( stack.HTMLClasses.activeTab );
			let label = document.querySelector( `.${stack.HTMLClasses.tabLabel}[for="${previousToggle.id}"]` );
			label && label.classList.remove( 'tsf-no-focus-ring' );
		}
		currentToggle.classList.add( stack.HTMLClasses.activeTab );

		if ( onload ) {
			toggleToInstant( stackId, event.target );
		} else {
			if ( ! _toggleCache.get( 'container' ).has( cacheId ) ) {
				// instead of 'inside', shouldn't we pick anything blockable?
				_toggleCache.get( 'container' ).set( cacheId, currentToggle.closest( '.inside' ) );
			}

			// Set toggleTarget for (active or upcoming) Promise. This value is set early, so Promises in race conditions will use this.
			_toggleCache.get( 'target' ).set( cacheId, toggleId );

			// If the promise is running, let it finish and consider the newly set ID.
			if ( _toggleCache.get( 'promises' ).has( cacheId ) ) return;

			toggleTo( stackId, event.target );
		}
	}

	/**
	 * Returns the registered stack.
	 *
	 * @since 4.1.3
	 * @access public
	 * @see tsfTabs.initStack() which registers the stack via param args.
	 *
	 * @param {String} stackId The stack ID for which to get the stack.
	 * @return {(Object<string,*>)} Immutable Map contents.
	 */
	function getStack( stackId ) {
		return tabStack.get( stackId );
	}

	/**
	 * Initializes a tab-switcher stack.
	 *
	 * A stack is merely an array of settings. The stack postulates certain events
	 * and HTMLClasses to be used. However, there may be an unlimited number of
	 * tabs registered in the DOM, even those with different 'form'-names, acting
	 * independently with each their own wrapper.
	 * For an example, see `tsfSettings._initTabs()` and visit the SEO Settings page.
	 *
	 * @since 4.1.3
	 * @access public
	 * @see tsfTabs.initStack registers the stack.
	 *
	 * @param {String}             stackId The stack ID for which to get the stack.
	 * @param {Object}             args    The stack arguments.
	 * @param {CustomEvent}        args.tabToggledEvent The Event firing after a tab toggled successfully.
	 * @param {(Object<string,*>)} args.HTMLClasses     The HTML classes pertinent to the stack. Expects:
	 *                                                  wrapper, tabRadio, tabLabel, activeTab, activeTabContent
	 * @param {Boolean}            args.fixHistory      Whether to switch tabs based when browser history is used.
	 *                                                  e.g. user hits back-button, non-default-tabRadio is still
	 *                                                  checked, but not switched to correctly. Edge case.
	 */
	function initStack( stackId, args ) {

		tabStack.set( stackId, args );

		const stack = getStack( stackId );

		const toggleForwarder = event => _toggle( stackId, event );
		const addNoFocusClass = event => event.currentTarget.classList.add( 'tsf-no-focus-ring' );

		// Set tab-content on-change.
		document.querySelectorAll( `.${stack.HTMLClasses.tabRadio}` ).forEach( el => {
			el.addEventListener( 'change', toggleForwarder );
		} );

		// Prevent focus rings on-click.
		document.querySelectorAll( `.${stack.HTMLClasses.wrapper} .${stack.HTMLClasses.tabLabel}` ).forEach( el => {
			el.addEventListener( 'click', addNoFocusClass );
		} );
	}

	return Object.assign( {
		/**
		 * Initialises all aspects of the scripts.
		 * You shouldn't call this.
		 *
		 * @since 4.1.3
		 * @access protected
		 *
		 * @function
		 */
		load: () => {
			_toggleCache.set( 'promises', new Map() );
			_toggleCache.set( 'target', new Map() );
			_toggleCache.set( 'wrap', new Map() );
			_toggleCache.set( 'container', new Map() );

			// Delay the focus fix, so not to delay the interactive state... even though it causes a page jump. This merely addresses an edge-case.
			window.addEventListener( 'load', _correctTabFocus );
		},
	}, {
		hideTab,
		showTab,
		toggleTab,
		toggleToInstant,
		toggleTo,
		getStack,
		initStack,
	} );
}();
window.tsfTabs.load();
