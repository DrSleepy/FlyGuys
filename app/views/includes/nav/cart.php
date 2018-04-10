<link rel="stylesheet" type="text/css" href="public/css/views/nav/cart.css"> 

<section id="dropdown-cart" class="dropdown-cart"> <!-- cart dropdown. Absolutely position -->
  <header class="dropdown-nav__header">
    <h2 class="dropdown-nav__heading"> Cart </h2>
  </header>

  <div id="dropdown__all-flights" class="dropdown__all-flights">

    <div id="empty-cart" class="empty-wrapper">
      <i class="empty__icon"></i>
      <p class="empty__text">Empty Cart</p>
    </div>

    <?php if (count($_SESSION['cart']) > 0) : ?>    
      <?php foreach (array_reverse($_SESSION['cart']) as $flight) : ?>  

    <div id="dropdown__flight-wrapper" class="dropdown__flight-wrapper">
      <div class="dropdown__flight-left">
        <i class="dropdown__flight-icon dropdown__flight-icon--outbound"></i>
        <p class="dropdown__flight-date"> <?= $flight->flightDate ?> </p>
        <p class="dropdown__flight-location dropdown__flight-location--from"> <?= $flight->outboundDepartureLocation ?> </p>
        <p class="dropdown__flight-location dropdown__flight-location--to"> <?= $flight->outboundLandingLocation ?> </p>
        
        <?php if ($flight->returnDate) : ?>         
        <i class="dropdown__flight-icon dropdown__flight-icon--inbound"></i>
        <p class="dropdown__flight-date"> <?= $flight->returnDate ?> </p>
        <p class="dropdown__flight-location dropdown__flight-location--from"> <?= $flight->returnDepartureLocation ?> </p>
        <p class="dropdown__flight-location dropdown__flight-location--to"> <?= $flight->returnLandingLocation ?> </p> 
        <?php endif ?>      
      </div>
      <div class="dropdown__flight-right">
        <p class="dropdown__flight-price"> £<?= $flight->price ?> </p>
        <i id="remove" class="dropdown__flight-icon dropdown__flight-remove" data-flightid="<?= $flight->flightID ?>"> </i>
      </div>
    </div>
      <?php endforeach ?>
    <?php endif ?>      

  </div>

  <footer class="dropdown-cart__footer">
    <a class="dropdown-cart__checkout" href="/Checkout"> Checkout </a>
    <p class="dropdown-cart__total-text"> Total: </p>
    <p id="total-price" class="dropdown-cart__total-price"> £0 </p>
  </footer>
</section>


<!-- Element to be kept hidden - This is so it can be cloned, reducing javascript lines -->
<div id="keepHidden" class="dropdown__flight-wrapper">
  <div class="dropdown__flight-left">
    <i class="dropdown__flight-icon dropdown__flight-icon--outbound"> </i>
    <p id="cart__outbound-date" class="dropdown__flight-date"> </p>
    <p id="cart__outbound-from" class="dropdown__flight-location dropdown__flight-location--from"> </p>
    <p id="cart__outbound-to" class="dropdown__flight-location dropdown__flight-location--to"> </p>

    <i id="cart__inbound-icon" class="dropdown__flight-icon dropdown__flight-icon--inbound"></i>
    <p id="cart__inbound-date" class="dropdown__flight-date"> </p>
    <p id="cart__inbound-from" class="dropdown__flight-location dropdown__flight-location--from"> </p>
    <p id="cart__inbound-to" class="dropdown__flight-location dropdown__flight-location--to"> </p>      
  </div>
  <div class="dropdown__flight-right">
    <p id="cart__flight-price" class="dropdown__flight-price"> </p>
    <i id="cart__remove" class="dropdown__flight-icon dropdown__flight-remove"> </i>
  </div>
</div>
