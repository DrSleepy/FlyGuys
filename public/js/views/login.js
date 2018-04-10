const submit = async (event) => {
  event.preventDefault();

  // ajax call
  const formInfo = new FormData(form);
  const init = {
    method: 'POST',
    credentials: 'same-origin',
    body: formInfo
  };

  const response = await fetch('/Login/loginUser', init);
  const responseText = await response.text();
  const data = JSON.parse(responseText);

  const formIsValid = data[0]; // is boolean
  const errorElement = document.querySelector('#error');

  if (!formIsValid) {
    errorElement.innerHTML = "Incorrect credentials"
    return;
  }

  errorElement.innerHTML = '';
  window.location.replace('/')
}

// Selecting all 'add to cart' buttons and adding event listeners
const form = document.querySelector('#login-form');
form.addEventListener('submit', submit);
