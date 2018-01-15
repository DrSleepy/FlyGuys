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
      <a class="nav__links-item"> Flights </a>
      <a class="nav__links-item"> Promotions </a>      
      <a class="nav__links-item nav__links-item--last"> Wishlist </a>
      <a class="nav__links-item nav__links-item--cart" href=""> Cart </a>
      <a class="nav__links-item nav__links-item--login" href="<?php echo PUBLIC_ROOT; ?>/Login"> Login </a>
      <a class="nav__links-item nav__links-item--register" href="<?php echo PUBLIC_ROOT; ?>/Register"> Register </a>      
      
      <!-- Importing in cart dropdown. Absolutely positioned -->
      <div class="dropdown-cart-wrapper">
        <?php require APP_ROOT . '/views/includes/nav/cart.php' ?>
      </div>
      
      <i class="nav__links-item--hamburger"></i> <!-- Apprears only on mobile -->

      <!-- Importing in mobile navigation. Absolutely positioned -->
      <div class="dropdown-nav-wrapper">
        <?php require APP_ROOT . '/views/includes/nav/mobile-nav.php' ?>
      </div>

    </div> <!-- end of nav__links  -->
  </div> <!-- end of nav__content  -->
</nav>