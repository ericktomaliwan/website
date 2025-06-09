import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  const hamburgerButton = document.getElementById('hamburgerButton');
  const mobileMenu = document.getElementById('mobileMenu');
  const popover = document.getElementById('popover-backdrop');

  const toggleMenu = () => {
    const isExpanded = hamburgerButton.getAttribute('aria-expanded') === 'true';
    hamburgerButton.setAttribute('aria-expanded', !isExpanded);

    mobileMenu.classList.toggle('invisible', isExpanded);
    mobileMenu.classList.toggle('opacity-0', isExpanded);
    mobileMenu.classList.toggle('visible', !isExpanded);
    mobileMenu.classList.toggle('opacity-100', !isExpanded);

    popover.classList.toggle('invisible', isExpanded);
    popover.classList.toggle('opacity-0', isExpanded);
    popover.classList.toggle('visible', !isExpanded);
    popover.classList.toggle('opacity-100', !isExpanded);
  };

  hamburgerButton.addEventListener('click', toggleMenu);
  popover.addEventListener('click', toggleMenu);

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
