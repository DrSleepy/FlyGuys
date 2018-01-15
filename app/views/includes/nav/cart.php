<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/nav/cart/style.css">  

<section class="dropdown-cart"> <!-- cart dropdown. Absolutely position -->
  <header class="dropdown-nav__header">
    <h2 class="dropdown-nav__heading"> Cart </h2>
    <i class="dropdown-nav__icon"> </i>
  </header>

  <div class="dropdown__flight-wrapper"> <!-- Single flight. Will be dynamically duplicated -->
    <div class="dropdown__flight-left">
      <i class="dropdown__flight-icon dropdown__flight-icon--outbound"></i>
      <p class="dropdown__flight-date"> 27/01/18 </p>
      <p class="dropdown__flight-location dropdown__flight-location--from"> London </p>
      <p class="dropdown__flight-location dropdown__flight-location--to"> Sudan </p>

      <i class="dropdown__flight-icon dropdown__flight-icon--inbound"></i>
      <p class="dropdown__flight-date"> 17/02/18 </p>
      <p class="dropdown__flight-location dropdown__flight-location--from"> Sudan </p>
      <p class="dropdown__flight-location dropdown__flight-location--to"> London </p>      
    </div>
    <div class="dropdown__flight-right">
      <p class="dropdown__flight-price"> £604 </p>
      <i class="dropdown__flight-icon dropdown__flight-remove"> </i>
    </div>
  </div>

  <footer class="dropdown-cart__footer">
    <button class="dropdown-cart__checkout"> Checkout </button>
    <p class="dropdown-cart__total-text"> Total: </p>
    <p class="dropdown-cart__total-price"> £6,205 </p>
  </footer>
</section>