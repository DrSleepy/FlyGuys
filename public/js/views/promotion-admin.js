import handleErrors from '/public/js/modules/appendErrors.js';

const errorElements = [
  '#percentage_off',
];

const submit = async (event) => {
  event.preventDefault();

  // ajax call
  const formInfo = new FormData(form);
  const init = {
    method: 'POST',
    credentials: 'same-origin',
    body: formInfo
  };
  const response = await fetch('/Checkout/checkoutUser', init);
  const responseText = await response.text();
  const data = JSON.parse(responseText);

  const formIsValid = data[0]; // boolean
  const errors = data[1]; // object

  handleErrors(errors, errorElements);
}

// Selecting all 'add to cart' buttons and adding event listeners
const form = document.querySelector('#promotionAdd-form');
form.addEventListener('submit', submit);
