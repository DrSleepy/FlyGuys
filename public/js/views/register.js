import handleErrors from '/public/js/modules/appendErrors.js';

const errorElements = [
  '#email',
  '#email_confirm',
  '#password',
  '#password_confirm'
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

  const response = await fetch('/Register/registerUser', init);
  const responseText = await response.text();
  const data = JSON.parse(responseText);

  const formIsValid = data[0]; // boolean
  const emptyErrorsObj = { email: '', email_confirm: '', password: '', password_confirm: '' };
  const errors = data[1] || emptyErrorsObj; // data[1] = object

  handleErrors(errors, errorElements);

  if (formIsValid) {
    window.location.replace('/')
  }

}

// Selecting all 'add to cart' buttons and adding event listeners
const form = document.querySelector('#register-form');
form.addEventListener('submit', submit);
