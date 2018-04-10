<link rel="stylesheet" type="text/css" href="/public/css/views/nav/nav.css">  

<nav class="nav">
  <div class="nav__content"> <!-- left section of navigation -->
    <img class="nav__logo" src="/public/assets/icons/rocket.svg" alt="an icon of a rocket from FlatIcon">
    <h1 class="nav__title">
      <a href="/">
        <span class="flight"> Fly </span>  
        <span class="guys"> Guys </span>
      </a>  
    </h1>

    <div class="nav__links"> <!-- right section of navigation -->
      <a class="nav__links-item" href="/"> Home </a>
      <a class="nav__links-item" href="/Flights"> Flights </a>
      <?php if ($_SESSION['userID']) : ?>     
      <a class="nav__links-item" href="/Wishlist"> Wishlist </a>
      <?php endif ?>
      <?php if ($_SESSION['isAdmin']) : ?>
      <a class="nav__links-item" href="/Dashboard"> Dashboard </a>
      <?php endif ?>
      
      <div class="cart-container">
        <button id="cart-button" class="nav__links-item nav__links-item--cart"> 
          Cart (<span id="cart-count">0</span>) 
        </button>

        <!-- Importing in cart dropdown. Absolutely positioned -->
        <?php include APP_ROOT . '/views/includes/nav/cart.php' ?>
      </div>
      

      <?php if (!$_SESSION['userID']) : ?>
      <a class="nav__links-item nav__links-item--login" href="/Login"> Login </a>
      <a class="nav__links-item nav__links-item--register" href="/Register"> Register </a>
      <?php else : ?>
      <button id="logout" class="nav__links-item nav__links-item--logout"> Logout </button>
      <?php endif ?>

      <i id="hamburger" class="nav__links-item--hamburger"></i> <!-- Apprears only on mobile -->
      
      <!-- Importing in mobile navigation. Absolutely positioned -->
      <?php require APP_ROOT . '/views/includes/nav/mobile-nav.php' ?>
    </div>
  </div>
</nav>

<script type="module" src="/public/js/views/nav.js"></script>

