<link rel="stylesheet" type="text/css" href="/public/css/views/flights/flight.css"> 

<?php foreach ($data['flights'] as $flight) : ?>
<article id="formID" class="flight-wrapper">

  <?php if($flight->promoted) : ?>
  <div class="promo-wrapper">
    <p class="promo-label"> Ends <?= $flight->promotionDate ?> </p>
  </div>
  <?php endif ?>    
  

  <header class="flight-header">
    <img class="flight-header__logo" src="/public/assets/icons/airline_logo.svg" alt="an icon of a plane from FlatIcon">
    <h2 class="flight-header__airline"> <?= $flight->flightClass ?> </h2>
    <p class="flight-header__price"> £<?= $flight->price ?> </p>

    <?php if($_SESSION['userID']) : ?>
      <?php if(in_array($flight->flightID, $data['wishlistFlightIDs'])) : ?>
      <i id="heart" class="ion-ios-heart" data-flightid="<?= $flight->flightID ?>"> </i>
      <?php else : ?>    
      <i id="heart" class="ion-ios-heart-outline" data-flightid="<?= $flight->flightID ?>"> </i>
      <?php endif ?>        
    <?php endif ?>    

    <div id="added_<?= $flight->flightID ?>" class="flight-header__added"> </div>
    <button id="add" class="flight-header__button" data-flightid="<?= $flight->flightID ?>" data-flight="<?= htmlspecialchars(json_encode($flight)) ?>"> Add to cart </button>    
  </header>

  <div class="flight-bound">
    <!-- outbound -->
    <div class="flight-left">
      <i class="flight-left__plane-icon flight-left__plane-icon--outbound"></i>
      <p class="flight-left__subheading"> Outbound </p>
      <p class="flight-left__date"> <?= $flight->flightDate ?> </p>        
    </div>

    <div class="flight-right">
      <p class="flight-right--from flight-right__time"> <?= $flight->outboundDepartureTime ?> </p>
      <p class="flight-right--from flight-right__location"> <?= $flight->outboundDepartureLocation ?> </p>

      <p class="flight-right--to flight-right__time"> <?= $flight->outboundLandingTime ?> </p>
      <p class="flight-right--to flight-right__location"> <?= $flight->outboundLandingLocation ?> </p>
    </div>

    <!-- inbound -->
    <?php if ($flight->returnID) : ?>
    <div class="flight-left">
      <i class="flight-left__plane-icon flight-left__plane-icon--inbound"></i>
      <p class="flight-left__subheading"> Inbound </p>
      <p class="flight-left__date"> <?= $flight->returnDate ?> </p>        
    </div>

    <div class="flight-right">
      <p class="flight-right--from flight-right__time"> <?= $flight->returnTakeoffTime ?> </p>
      <p class="flight-right--from flight-right__location"> <?= $flight->returnDepartureLocation ?> </p>

      <p class="flight-right--to flight-right__time"> <?= $flight->returnLandingTime ?> </p>
      <p class="flight-right--to flight-right__location"> <?= $flight->returnLandingLocation ?> </p>
    </div>
    <?php endif ?>

  </div>

  <?php if ($_SESSION['isAdmin']) : ?>
  <footer class="flight-footer">
    <div class="flight-footer__delete-wrapper">
      <button id="delete" class="flight-footer__delete" data-flightid="<?= $flight->flightID ?>"> Delete </button>
      <div id="confirmation_<?= $flight->flightID ?>" class="confirmation">
        <p class="confirmation__text"> Are you sure? </p>
        <button id="cancel" class="confirmation__cancel"> Cancel </button>
        <button id="delete-confirmed" class="confirmation__delete"> Delete </button>
      </div>
    </div>
    <button id="edit-button" class="flight-footer__edit border-button" data-flight="<?= htmlspecialchars(json_encode($flight)) ?>"> Edit </button>
  </footer>
  <?php endif ?>
  

</article>
<?php endforeach ?>

<?php if (count($data['flights']) < 1) : ?>
  <?php if ($_SERVER['REQUEST_URI'] == '/Home') : ?>
  <p class="no-results"> There are no current promotions </p>
  <?php elseif ($_SERVER['REQUEST_URI'] == '/Flights') : ?>
  <p class="no-results"> No results found :( </p>
  <?php elseif ($_SERVER['REQUEST_URI'] == '/Wishlist') :?>
  <p class="no-results"> Your wishlist is empty </p>
  <?php endif ?>
<?php endif ?>

<script type="module" src="/public/js/views/flight.js"></script>
