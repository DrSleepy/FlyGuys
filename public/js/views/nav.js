import toggle from '/public/js/modules/toggle.js';
import { cartUpdateCounter, cartEmptyChecker } from '/public/js/views/cart.js';

if (location.protocol !== 'https:') location.protocol = 'https:';

let documentClick = () => {
  toggle('#cart-button', '#dropdown-cart');
  toggle('#hamburger', '#dropdown-nav');
};

cartUpdateCounter();
cartEmptyChecker();

const logoutNav = async () => {
  const init = {
    method: 'GET',
    credentials: 'same-origin'
  };
  const response = await fetch('/Login/logoutUser', init);
  const loggedOut = await response.text();

  if (loggedOut) {
    window.location.replace('/');
  }
};

const logoutElement = document.querySelector('#logout');
if (logoutElement) {
  logoutElement.addEventListener('click', logoutNav);
}

document.addEventListener('click', documentClick);
