import toggle from '/public/js/modules/toggle.js';
import { cartNewItemHandler, cartUpdatePrice } from '/public/js/views/cart.js';

// variables
let confirmationID = '';

// functions
const animateAdded = id => {
  const addedDiv = document.querySelector(`#added_${id}`); //get div id to animate
  setTimeout(() => {
    // reset animation so able to click again
    addedDiv.style.animation = 'none';
  }, 700);
  addedDiv.style.animation = 'fadeUp 0.7s both cubic-bezier(0.4, 0, 0.23, 1)';
};

const addFlightToCart = async event => {
  // animating the green tick - first so site feels faster...
  const flightid = event.target.dataset.flightid;
  animateAdded(flightid);

  // creating data to be sent
  const formInfo = new FormData();
  const flight = event.target.dataset.flight;

  formInfo.append('flight', flight);

  // ajax call
  const init = {
    method: 'POST',
    credentials: 'same-origin',
    body: formInfo
  };

  const response = await fetch('/Carts/add', init);

  const flightSelected = JSON.parse(flight);

  // create cart element and add to cart
  cartNewItemHandler(flightSelected);
  cartUpdatePrice();
};

const toggleHeart = async event => {
  const flightid = event.target.dataset.flightid;
  const formInfo = new FormData();

  formInfo.append('flightID', flightid);

  const init = {
    method: 'POST',
    credentials: 'same-origin',
    body: formInfo
  };

  if (event.target.className === 'ion-ios-heart-outline') {
    // add to wishlist through controller
    formInfo.append('add', true);
    fetch('/Wishlist/addOrRemoveFromWishlist', init);
    event.target.classList.remove('ion-ios-heart-outline');
    event.target.classList.add('ion-ios-heart');
    return;
  }

  // remove from wishlist through controller
  fetch('/Wishlist/addOrRemoveFromWishlist', init);
  event.target.classList.remove('ion-ios-heart');
  event.target.classList.add('ion-ios-heart-outline');
};

const showConfirmation = () => {
  const flightid = event.target.dataset.flightid;

  if (!confirmationID) {
    confirmationID = flightid;
  } else if (confirmationID !== flightid) {
    toggle('#delete', `#confirmation_${confirmationID}`);
  }

  confirmationID = flightid;
  const confirmationDiv = document.querySelector(`#confirmation_${flightid}`);
  confirmationDiv.style.display = 'inline';
};

const hideConfirmation = () => {
  const confirmationDiv = document.querySelector(`#confirmation_${confirmationID}`);
  confirmationDiv.style.display = 'none';
};

const deleteFromDatabase = () => {
  const formInfo = new FormData();
  formInfo.append('flightID', confirmationID);

  const init = {
    method: 'POST',
    credentials: 'same-origin',
    body: formInfo
  };

  fetch('/Flights/delete', init);
};

const deleteConfirmed = () => {
  deleteFromDatabase();
  const flightElement = event.target.parentNode.parentNode.parentNode.parentNode;
  flightElement.remove();
  confirmationID = '';
};

const documentClick = () => {
  if (event.target.id === 'delete') return;
  if (event.target.id === 'delete-confirmed') return;
  toggle('#delete', `#confirmation_${confirmationID}`);
};

const handleEditPopup = showOrHide => {
  showOrHide
    ? editPopup.setAttribute('style', 'display: grid !important')
    : editPopup.setAttribute('style', 'display: none !important');
};

const populateEditPopup = flight => {
  // document.querySelector('#edit-price').value = flight.price;

  // document.querySelector('#new-O-date').value = flight.flightDate;
  // document.querySelector('#new-O-dTime').value = flight.outboundDepartureTime;
  // document.querySelector('#new-O-lTime').value = flight.outboundLandingTime;
  // document.querySelector('#new-O-lLocation').value = flight.outboundLandingLocation;

  // document.querySelector('#new-I-date').value = flight.returnDate;
  // document.querySelector('#new-I-dTime').value = flight.returnTakeoffTime;
  // document.querySelector('#new-I-lTime').value = flight.returnLandingTime;
  // document.querySelector('#new-I-dlocation').value = flight.returnDepartureLocation;

  document.querySelector('#flightID').value = flight.flightID;
  document.querySelector('#returnFlightID').value = flight.returnID;
  document.querySelector('#new-flight-class').value = flight.flightClass;
  document.querySelector('#edit-price').value = flight.price;

  document.querySelector('#new-O-date').value = flight.flightDate;
  document.querySelector('#new-O-dTime').value = flight.outboundDepartureTime;
  document.querySelector('#new-O-lTime').value = flight.outboundLandingTime;
  // document.querySelector('#new-O-lLocation').value = flight.outboundLandingLocation;

  document.querySelector('#new-I-date').value = flight.returnDate;
  document.querySelector('#new-I-dTime').value = flight.returnTakeoffTime;
  document.querySelector('#new-I-lTime').value = flight.returnLandingTime;
  // document.querySelector('#new-I-dlocation').value = flight.returnDepartureLocation;
};

// Event listeners
const allheartButtons = document.querySelectorAll('#heart');
const allAddButtons = document.querySelectorAll('#add');
const allDeleteButtons = document.querySelectorAll('#delete');
const allCancelButtons = document.querySelectorAll('#cancel');
const allDeleteConfirmedButtons = document.querySelectorAll('#delete-confirmed');
const editButtons = document.querySelectorAll('#edit-button');
const cancelButton = document.querySelector('#cancel-popup');
const editPopup = document.querySelector('#edit-popup-wrapper');

document.addEventListener('click', documentClick);
allheartButtons.forEach(current => current.addEventListener('click', toggleHeart));
allAddButtons.forEach(current => current.addEventListener('click', addFlightToCart));
allDeleteButtons.forEach(current => current.addEventListener('click', showConfirmation));
allCancelButtons.forEach(current => current.addEventListener('click', hideConfirmation));
allDeleteConfirmedButtons.forEach(current => current.addEventListener('click', deleteConfirmed));

editButtons.forEach(current =>
  current.addEventListener('click', () => {
    event.preventDefault();
    const flight = JSON.parse(event.target.dataset.flight);
    handleEditPopup(true);
    populateEditPopup(flight);
  })
);

cancelButton.addEventListener('click', () => handleEditPopup(false));
