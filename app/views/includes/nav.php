<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/nav/style.css">  
  
<nav class="nav">
  <div class="nav__content">

    <img class="nav__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/rocket.png">
    <h1 class="nav__title">
      <a href="<?php echo PUBLIC_ROOT . '/users/home' ?>">
        <span class="flight"> Fly </span>  
        <span class="guys"> Guys </span>
      </a>
    </h1>

    <!-- <div class="nav__links">
      <a class="nav__links-item"> Flights </a>
      <a class="nav__links-item"> About Us </a>
      <a class="nav__links-item"> Account </a>
      <a class="nav__links-item nav__links-item--cart" href=""> Cart </a>
      <a class="nav__links-item nav__links-item--login" href="<?php echo PUBLIC_ROOT . '/users/login' ?>"> Login </a>
    </div> -->

    <div class="nav__links">
      <a class="nav__links-item"> Flights </a>
      <a class="nav__links-item"> About Us </a>
      <a class="nav__links-item"> Account </a>
      <a class="nav__links-item nav__links-item--cart" href=""> Cart </a>

      <nav class="dropdown-cart">
        <header class="dropdown-nav__header">
          <h2 class="dropdown-nav__heading"> Cart </h2>
          <i class="dropdown-nav__icon"> </i>
        </header>
        <div class="dropdown__flight-wrapper">
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

      </nav>


      <i class="nav__links-item--hamburger"></i>

      <!-- <nav class="dropdown-nav">
        <header class="dropdown-nav__header">
          <h2 class="dropdown-nav__heading"> Menu </h2>
          <i class="dropdown-nav__icon"> </i>
        </header>
        <a class="dropdown-nav__link"> Flights </a>
        <a class="dropdown-nav__link"> Login </a>        
        <a class="dropdown-nav__link"> Account </a>
        <a class="dropdown-nav__link"> About Us </a>
      </nav> -->

    </div>

  </div>
</nav>