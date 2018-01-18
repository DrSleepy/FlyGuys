<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/nav/main/style.css">  
  
<nav class="nav">
  <div class="nav__content"> <!-- left section of navigation -->
    <img class="nav__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/rocket.svg">
    <h1 class="nav__title">
      <a href="<?php echo PUBLIC_ROOT ?>">
        <span class="flight"> Fly </span>  
        <span class="guys"> Guys </span>
      </a>                                                                                                                                                                                                                                          
    </h1>

    <div class="nav__links"> <!-- right section of navigation -->
      <a class="nav__links-item" href="<?php echo PUBLIC_ROOT; ?>"> Home </a>
      <a class="nav__links-item" href="<?php echo PUBLIC_ROOT; ?>/Flights"> Flights </a>
      <a class="nav__links-item"> Promotions </a>      
      <a class="nav__links-item nav__links-item--last"> Wishlist </a>
      <button id="cart-button" class="nav__links-item nav__links-item--cart"> Cart </button>

      <?php if(!isset($_SESSION['id'])) : ?>
      <a class="nav__links-item nav__links-item--login" href="<?php echo PUBLIC_ROOT; ?>/Login"> Login </a>
      <a class="nav__links-item nav__links-item--register" href="<?php echo PUBLIC_ROOT; ?>/Register"> Register </a>
      <?php else : ?>
      <a class="nav__links-item nav__links-item--logout" href="<?php echo PUBLIC_ROOT; ?>/Register"> Logout </a>
      <?php endif ?>
      
      <!-- Importing in cart dropdown. Absolutely positioned -->
      <?php include APP_ROOT . '/views/includes/nav/cart.php' ?>
      
      <i id="hamburger" class="nav__links-item--hamburger"></i> <!-- Apprears only on mobile -->

      <!-- Importing in mobile navigation. Absolutely positioned -->
      <?php require APP_ROOT . '/views/includes/nav/mobile-nav.php' ?>

    </div> <!-- end of nav__links  -->
  </div> <!-- end of nav__content  -->
</nav>

<script type="module" src="<?php echo PUBLIC_ROOT; ?>/js/views/nav.js "></script>
