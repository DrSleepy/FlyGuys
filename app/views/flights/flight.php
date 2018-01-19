<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/flights/flight/style.css">  

<div id="output"></div>
<?php foreach ($data as $flight): ?>
<article id="formID" class="flight-wrapper">
  <header class="flight-header">
    <img id="" name="a" class="flight-header__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/airline_logo.svg">
    <h2 id="" name="b" class="flight-header__airline"> <?php echo $flight['airline'] ?> </h2>
    <p name="c" class="flight-header__price"> £<?php echo $flight['price'] ?> </p>
    <button id="add" class="flight-header__button" data-flightid="<?php echo $flight['id'] ?>"> Add to cart </button>
  </header>

  <div class="flight-bound">
    <!-- outbound -->        
    <div class="flight-left">
      <i class="flight-left__plane-icon flight-left__plane-icon--outbound"></i>
      <p class="flight-left__subheading"> Outbound </p>
      <p class="flight-left__date"> <?php echo $flight['outbound_date'] ?> </p>        
    </div>

    <div class="flight-right">
      <p class="flight-right--from flight-right__time"> <?php echo $flight['outbound_takeoff-time'] ?> </p>
      <p class="flight-right--from flight-right__location"> <?php echo $flight['outbound_takeoff-city'] ?> </p>
      <p class="flight-right--from flight-right__airport"> <?php echo $flight['outbound_takeoff-airport'] ?> </p>

      <p class="flight-right--to flight-right__time"> <?php echo $flight['outbound_landing-time'] ?> </p>
      <p class="flight-right--to flight-right__location"> <?php echo $flight['outbound_landing-city'] ?> </p>
      <p class="flight-right--to flight-right__airport"> <?php echo $flight['outbound_landing-airport'] ?> </p>
    </div>

    <!-- inbound -->
    <div class="flight-left">
      <i class="flight-left__plane-icon flight-left__plane-icon--inbound"></i>
      <p class="flight-left__subheading"> Inbound </p>
      <p class="flight-left__date"> 17 Jan Wed </p>        
    </div>

    <div class="flight-right">
      <p class="flight-right--from flight-right__time"> 08:35 </p>
      <p class="flight-right--from flight-right__location"> London </p>
      <p class="flight-right--from flight-right__airport"> Heathrow </p>

      <p class="flight-right--to flight-right__time"> 11:55 </p>
      <p class="flight-right--to flight-right__location"> Sudan </p>
      <p class="flight-right--to flight-right__airport"> Khartoum </p>
    </div>
  </div>
</article>
<?php endforeach ?>


<script>
// PROGRESS - dont delete
const addFlightToCart = (event) => {
  // event.preventDefault(); // prevent page refresh (only needed when using form element)

  const flightid = event.target.dataset.flightid // getting flight ID from selected button

  // data to be sent to php
  const formData = new FormData();
  formData.append("flightid", flightid);

  // forming ajax properties
  const url = '/Carts/addToCart';
  const init = {
    method: 'POST',
    body: formData
    };

  // running the ajax call (runs php in 'url')
  fetch(url, init)
    .then(res => res.text()) // returns data back from php in promise
    .then(data => output.innerHTML = data) // data now retrieve and set as param
    .catch(err => console.log(err));

}

const addButton = document.querySelector('#add');
const output = document.querySelector('#output');

addButton.addEventListener('click', addFlightToCart);
</script>
