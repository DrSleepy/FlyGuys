<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/nav/cart/style.css">  

<section id="dropdown-cart" class="dropdown-cart"> <!-- cart dropdown. Absolutely position -->
  <header class="dropdown-nav__header">
    <h2 class="dropdown-nav__heading"> Cart </h2>
  </header>

  <div class="dropdown__all-flights">

    <?php if (count($_SESSION['cart']) < 1) : ?> 
    <div class="empty-wrapper">
      <i class="empty__icon"></i>
      <p class="empty__text">Empty Cart</p>
    </div>
    <?php else : ?>  

    <?php foreach ($_SESSION['cart'] as $item) : ?>  
    <div class="dropdown__flight-wrapper">
      <div class="dropdown__flight-left">
        <i class="dropdown__flight-icon dropdown__flight-icon--outbound"></i>
        <p class="dropdown__flight-date"> <?php // echo $item['username'] ?> </p>
        <p class="dropdown__flight-location dropdown__flight-location--from"> <?php // echo $item['outbound_takeoff-city'] ?> </p>
        <p class="dropdown__flight-location dropdown__flight-location--to"> <?php // echo $item['outbound_landing-city'] ?> </p>

        <i class="dropdown__flight-icon dropdown__flight-icon--inbound"></i>
        <p class="dropdown__flight-date"> <?php // echo $item['inbound_date'] ?> </p>
        <p class="dropdown__flight-location dropdown__flight-location--from"> <?php // echo $item['outbound_takeoff-city'] ?> </p>
        <p class="dropdown__flight-location dropdown__flight-location--to"> <?php // echo $item['outbound_landing-city'] ?> </p>      
      </div>
      <div class="dropdown__flight-right">
        <p class="dropdown__flight-price"> <?php // echo $item['price'] ?> </p>
        <i class="dropdown__flight-icon dropdown__flight-remove"> </i>
      </div>
    </div>
    <?php endforeach ?>
    <?php endif ?>      

  </div>

  <footer class="dropdown-cart__footer">
    <a class="dropdown-cart__checkout" href="<?php // echo PUBLIC_ROOT; ?>/checkout"> Checkout </a>
    <p class="dropdown-cart__total-text"> Total: </p>
    <p class="dropdown-cart__total-price"> £6,205 </p>
  </footer>
</section>