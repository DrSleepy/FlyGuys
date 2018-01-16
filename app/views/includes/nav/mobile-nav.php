<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/nav/mobile-nav/style.css">  

<nav id="dropdown-nav" class="dropdown-nav">
  <header class="dropdown-nav__header">
    <h2 class="dropdown-nav__heading"> Menu </h2>
  </header>
  
  <a class="dropdown-nav__link" href="<?php echo PUBLIC_ROOT; ?>"> Home </a>  
  <a class="dropdown-nav__link" href="<?php echo PUBLIC_ROOT; ?>/Flights"> Flights </a>
  <a class="dropdown-nav__link"> Promotions </a>        
  <a class="dropdown-nav__link"> Wishlist </a>

  <?php if (!isset($_SESSION['id'])) { ?>
  <a class="dropdown-nav__link" href="<?php echo PUBLIC_ROOT; ?>/Login"> Login </a>
  <a class="dropdown-nav__link" href="<?php echo PUBLIC_ROOT; ?>/Register"> Register </a>
  <?php } else { ?>
  <a class="dropdown-nav__link" href="<?php echo PUBLIC_ROOT; ?>/Login"> Logout </a>
  <?php } ?>
</nav>