const allFlightsInCart = document.querySelector('#dropdown__all-flights');
const emptyCartElement = document.querySelector('#empty-cart');
const cartCounterElement = document.querySelector('#cart-count');
const cartTotalPriceElement = document.querySelector('#total-price');

const cartHideEmptyIcon = () => {
  emptyCartElement.style.display = 'none';
}

const cartShowEmptyIcon = () => {
  emptyCartElement.style.display = 'grid';
}

const cartEmptyChecker = () => {
  !allFlightsInCart.children[1] ? cartShowEmptyIcon() : cartHideEmptyIcon();
}

const cartNewItemHandler = (flight) => {
  cartHideEmptyIcon();
  const newElement = createCartElement(flight);
  cartInsertItem(newElement);
  cartUpdateCounter();
}

const cartInsertItem = (element) => {
  allFlightsInCart.insertBefore(element, allFlightsInCart.children[1]);
}

const cartUpdateCounter = () => {
  cartCounterElement.textContent = allFlightsInCart.children.length - 1;
  cartEmptyChecker();
  cartUpdatePrice();
}

const cartUpdatePrice = async () => {
  const init = {
    method: 'GET',
    credentials: 'same-origin',
  };

  const response = await fetch('/Carts/totalPriceSession', init);
  const cartTotalPrice = await response.text();

  const totalPrice = cartTotalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  cartTotalPriceElement.textContent = `£${totalPrice}`;
}

// function is for dynamically adding flight THEN removing BEFORE page refresh
// function is "replicated" on views / nav / cart.php which works after page refresh
// to future me: I suck for doing this, I know. I tried.
const cartRemove = (element, flightID) => {
  return async () => {
    event.stopPropagation();

    // creating data to be sent
    const formInfo = new FormData();
    formInfo.append("flightID", flightID);

    // ajax call
    const init = {
      method: 'POST',
      credentials: 'same-origin',
      body: formInfo
    };

    const response = await fetch('/Carts/remove', init);
    const isDeleted = await response.text();

    if (isDeleted) {
      element.remove();
      cartUpdateCounter();
    }
  }
}

// ==============================EVALUATE CODE BELOW=================================

// FUNCTION TO BE REFACTORED AND COMPARED TO 'cartRemove' FUNCTION
const removeFromCart = async () => {
  event.stopPropagation();
  const flightClicked = event.target.parentElement.parentElement;

  // creating data to be sent
  const formInfo = new FormData();
  const flightID = event.target.dataset.flightid;
  formInfo.append("flightID", flightID);

  // ajax call
  const init = {
    method: 'POST',
    credentials: 'same-origin',
    body: formInfo
  };

  const response = await fetch('/Carts/remove', init);
  const isDeleted = await response.text();

  if (isDeleted) {
    flightClicked.remove();
    cartUpdateCounter();
  }
}

const removeElements = document.querySelectorAll('#remove');
removeElements.forEach(current => {
  current.addEventListener('click', removeFromCart);
});

// ==============================EVALUATE CODE ABOVE=================================

const createCartElement = (flight) => {
  const hiddenFlight = document.querySelector('#keepHidden'); // element from cart. views/includes/nav/cart.php  
  const flightToAdd = hiddenFlight.cloneNode(true);

  flightToAdd.style.display = 'grid';

  flightToAdd.querySelector('#cart__outbound-date').textContent = flight.flightDate;
  flightToAdd.querySelector('#cart__outbound-from').textContent = flight.outboundDepartureLocation;
  flightToAdd.querySelector('#cart__outbound-to').textContent = flight.outboundLandingLocation;

  if (!flight.returnDate) {
    flightToAdd.querySelector('#cart__inbound-icon').style.display = 'none';
    flightToAdd.querySelector('#cart__inbound-date').style.display = 'none';
    flightToAdd.querySelector('#cart__inbound-from').style.display = 'none';
    flightToAdd.querySelector('#cart__inbound-to').style.display = 'none';
  } else {
    flightToAdd.querySelector('#cart__inbound-icon').style.display = 'grid';
    flightToAdd.querySelector('#cart__inbound-date').style.display = 'grid';
    flightToAdd.querySelector('#cart__inbound-from').style.display = 'grid';
    flightToAdd.querySelector('#cart__inbound-to').style.display = 'grid';
    flightToAdd.querySelector('#cart__inbound-date').textContent = flight.returnDate;
    flightToAdd.querySelector('#cart__inbound-from').textContent = flight.returnDepartureLocation;
    flightToAdd.querySelector('#cart__inbound-to').textContent = flight.returnLandingLocation;
  }

  flightToAdd.querySelector('#cart__flight-price').textContent = `£${flight.price}`;
  flightToAdd.querySelector('#cart__remove ').addEventListener('click', cartRemove(flightToAdd, flight.flightID));

  return flightToAdd;
}


export {
  cartEmptyChecker,
  cartUpdateCounter,
  cartNewItemHandler,
  cartUpdatePrice
}
