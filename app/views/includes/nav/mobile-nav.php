<link rel="stylesheet" type="text/css" href="/public/css/views/nav/mobile-nav.css">  

<nav id="dropdown-nav" class="dropdown-nav">
  <header class="dropdown-nav__header">
    <h2 class="dropdown-nav__heading"> Menu </h2>
  </header>
  
  <a class="dropdown-nav__link" href="/"> Home </a>  
  <a class="dropdown-nav__link" href="/Flights"> Flights </a>
  <?php if ($_SESSION['userID']) : ?>        
  <a class="dropdown-nav__link" href="/Wishlist"> Wishlist </a>
  <?php endif ?>
  <?php if ($_SESSION['isAdmin']) : ?>
  <a class="dropdown-nav__link" href="/Dashboard"> Dashboard </a>
  <?php endif ?>
  <?php if (!$_SESSION['userID']) : ?>
  <a class="dropdown-nav__link" href="/Login"> Login </a>
  <a class="dropdown-nav__link" href="/Register"> Register </a>
  <?php else : ?>
  <a id="logoutMobile" class="dropdown-nav__link dropdown-nav__link--logout" > Logout </a>
  <?php endif ?>
</nav>

<script src="/public/js/views/mobile-nav.js"></script>
