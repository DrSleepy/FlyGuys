
<!-- purple block -->
<div class="background">

<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/home/style.css">  

    <header class="header">
      <div class="header__info">
        <h1 class="header__title"> Fly Guys </h1>
        <p class="header__text"> Whether it's your first flight or simply your latest, we work to anticipate your every need </p>
      </div>
      <div class="header__images">
        <img class="header__images-item cloud-1" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.png">     
        <img class="header__images-item cloud-2" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.png">
        <img class="header__images-item rocket" src="<?php echo PUBLIC_ROOT; ?>/img/icons/rocket.png">
      </div>
      <a class="header__button" href="<?php echo PUBLIC_ROOT . '/flights/flights' ?>"> View Flights </a>
    </header>
    
</div>

<!-- Underneath yellow block -->
<div class="wrapper">

  <!-- Offers -->
  <section class="section section-offers">
    <h2 class="section__heading"> Special Offers </h2>

    <div class="special-offers">
      <article class="special-offer">
        <img class="special-offer__image" src="<?php echo PUBLIC_ROOT; ?>/img/offers/offer1.jpeg">
        <h3 class="special-offer__heading">Up to 20% off your stay & kids go free at Atlantis The Palm, Dubai!</h3>
      </article>

      <article class="special-offer">
        <img class="special-offer__image" src="<?php echo PUBLIC_ROOT; ?>/img/offers/offer2.jpeg">
        <h3 class="special-offer__heading">Up to 20% off your stay & kids go free at Atlantis The Palm, Dubai!</h3>
      </article>

      <article class="special-offer">
        <img class="special-offer__image" src="<?php echo PUBLIC_ROOT; ?>/img/offers/offer3.jpeg">
        <h3 class="special-offer__heading">Up to 20% off your stay & kids go free at Atlantis The Palm, Dubai!</h3>
      </article>
    </div> <!-- end of special-offers -->
  </section>

</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
