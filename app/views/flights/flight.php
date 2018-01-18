<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/flights/flight/style.css">  

<?php foreach ($data as $flight) : ?>
<form class="flight-wrapper" action="<?php echo PUBLIC_ROOT; ?>/Flights/addToCart?add=<?php echo base64_encode(serialize($flight)) ?>" method="POST">
  <header class="flight-header">
    <img class="flight-header__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/airline_logo.svg">
    <h2 class="flight-header__airline"> <?php echo $flight['airline'] ?> </h2>
    <p class="flight-header__price"> £<?php echo $flight['price'] ?> </p>
    <button type="submit" class="flight-header__button"> Add to cart </button>
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
</form>
<?php endforeach ?>