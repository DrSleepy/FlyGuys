<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/nav/style.css">  
  
<nav class="nav">
  <div class="nav__content"> <!-- left section of navigation -->
    <img class="nav__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/rocket.png">
    <h1 class="nav__title">
      <a href="<?php echo PUBLIC_ROOT . '/users/home' ?>">
        <span class="flight"> Fly </span>  
        <span class="guys"> Guys </span>
      </a>
    </h1>

    <div class="nav__links"> <!-- right section of navigation -->
      <a class="nav__links-item"> Flights </a>
      <a class="nav__links-item"> About Us </a>
      <a class="nav__links-item"> Account </a>
      <a class="nav__links-item nav__links-item--cart" href=""> Cart </a>

      <section class="dropdown-cart"> <!-- cart dropdown. Absolutely position -->
        <header class="dropdown-nav__header">
          <h2 class="dropdown-nav__heading"> Cart </h2>
          <i class="dropdown-nav__icon"> </i>
        </header>

        <div class="dropdown__flight-wrapper"> <!-- Single flight. Will be dynamically duplicated -->
          <div class="dropdown__flight-left">
            <i class="dropdown__flight-icon dropdown__flight-icon--outbound"></i>
            <p class="dropdown__flight-date"> 27/01/18 </p>
            <p class="dropdown__flight-location"> London </p>
            <p class="dropdown__flight-location"> Sudan </p>

            <i class="dropdown__flight-icon dropdown__flight-icon--inbound"></i>
            <p class="dropdown__flight-date"> 17/02/18 </p>
            <p class="dropdown__flight-location"> Sudan </p>
            <p class="dropdown__flight-location"> London </p>      
          </div>
          <div class="dropdown__flight-right">
            <p class="dropdown__flight-price"> £604 </p>
            <i class="dropdown__flight-icon dropdown__flight-remove"> </i>
          </div>
        </div>

        <div class="dropdown__flight-wrapper"> <!-- 2nd flight -->
          <div class="dropdown__flight-left">
            <i class="dropdown__flight-icon dropdown__flight-icon--outbound"></i>
            <p class="dropdown__flight-date"> 27/01/18 </p>
            <p class="dropdown__flight-location"> London </p>
            <p class="dropdown__flight-location"> Sudan </p> 
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

      <i class="nav__links-item--hamburger"></i> <!-- Apprears only on mobile -->

      <nav class="dropdown-nav"> <!-- mobile navigation dropdown. Absolutely position -->
        <header class="dropdown-nav__header">
          <h2 class="dropdown-nav__heading"> Menu </h2>
          <i class="dropdown-nav__icon"> </i>
        </header>
        <a class="dropdown-nav__link"> Flights </a>
        <a class="dropdown-nav__link"> Login </a>        
        <a class="dropdown-nav__link"> Account </a>
        <a class="dropdown-nav__link"> About Us </a>
      </nav>

    </div> <!-- end of nav__links  -->
  </div> <!-- end of nav__content  -->
</nav>