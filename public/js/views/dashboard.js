const toggleSection = elementID => {
  return () => {
    const sectionElement = document.querySelector(elementID);

    if (sectionElement.style.display === 'none' || sectionElement.style.display === '') {
      sectionElement.style.display = 'grid';
    } else {
      sectionElement.style.display = 'none';
    }
  };
};

const handleEditPopup = showOrHide => {
  showOrHide
    ? editPopup.setAttribute('style', 'display: grid !important')
    : editPopup.setAttribute('style', 'display: none !important');
};

const populateEditPopup = flight => {
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

const newFlightCheckbox = document.querySelector('#new-flight-checkbox');
const editFlightCheckbox = document.querySelector('#edit-flight-checkbox');
const promotionsCheckbox = document.querySelector('#promotions-checkbox');
const destinationCheckbox = document.querySelector('#destinations-checkbox');

const cancelButton = document.querySelector('#cancel-popup');
const editPopup = document.querySelector('#edit-popup-wrapper');
const editButtons = document.querySelectorAll('#edit-button');

newFlightCheckbox.addEventListener('click', toggleSection('#new-flight-section'));
editFlightCheckbox.addEventListener('click', toggleSection('#edit-flight-section'));
promotionsCheckbox.addEventListener('click', toggleSection('#promotions-section'));
destinationCheckbox.addEventListener('click', toggleSection('#destinations-section'));

editButtons.forEach(current =>
  current.addEventListener('click', () => {
    event.preventDefault();
    const flight = JSON.parse(event.target.dataset.flight);
    handleEditPopup(true);
    populateEditPopup(flight);
  })
);

cancelButton.addEventListener('click', () => handleEditPopup(false));
