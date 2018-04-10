import handleErrors from '/public/js/modules/appendErrors.js';

const errorElements = [
  '#first_name',
  '#last_name',
  '#home_number',
  '#mobile_number',
  '#address',
  '#town_city',
  '#postcode',
  '#country'
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

  if (!formIsValid) return;
  getTotalPrice();
}

const getTotalPrice = async () => {
  // ajax call
  const init = {
    method: 'GET',
    credentials: 'same-origin',
  };

  const response = await fetch('/Carts/totalPriceDatabase', init);
  const responseText = await response.text();
  const data = await JSON.parse(responseText);

  const totalPrice = parseInt(data[0].totalPrice * 100);
  stripeFormHandler(totalPrice);
}

const stripeFormHandler = (price) => {
  const handler = StripeCheckout.configure({
    key: 'pk_test_XKYTSBQxrCozUBzCbs20P03t',
    image: '/public/assets/icons/rocket.png',
    locale: 'auto',
    async token(token) { // on success
      const stripeTokenElement = document.querySelector('#stripeToken');
      stripeTokenElement.value = token.id;
      form.submit();
    }
  });

  // Open Stripe checkout with further options
  handler.open({
    name: 'Fly Guys',
    currency: 'gbp',
    amount: price
  });
}

const form = document.querySelector('#checkout-form');
form.addEventListener('submit', submit);

// Close Stripe checkout on page navigation
document.addEventListener('popstate', () => {
  handler.close();
});
