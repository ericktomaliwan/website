import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  const hamburgerButton = document.getElementById('hamburgerButton');
  const mobileMenu = document.getElementById('mobileMenu');
  const popover = document.getElementById('popover-backdrop');

  if (hamburgerButton && mobileMenu) { // Check if elements exist
    hamburgerButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      mobileMenu.classList.toggle('fade');
      popover.classList.toggle('hidden');
    });
  }
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
