import toggle from '../modules/toggle.js';

let documentClick = () => {
  toggle('#cart-button', '#dropdown-cart');
  toggle('#hamburger', '#dropdown-nav');
};

document.addEventListener('click', documentClick);
