
<!-- purple block -->
<div class="background">

<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="/public/css/views/home/home-page.css">  

  <header class="header">
    <div class="header__info">
      <h1 class="header__title"> Fly Guys </h1>
      <p class="header__text"> Browse flights exclusively departing from Stansted, UK to neighbouring locations </br> - Up up and away! </p>      
    </div>
    <div class="header__images">
      <img class="header__images-item cloud-1" src="/public/assets/icons/clouds.svg" alt="an icon of a cloud from FlatIcon">     
      <img class="header__images-item cloud-2" src="/public/assets/icons/clouds.svg" alt="an icon of a cloud from FlatIcon">
      <img class="header__images-item rocket" src="/public/assets/icons/rocket.svg" alt="an icon of a rocket from FlatIcon">
    </div>
    <a class="header__button" href="/Flights"> View Flights </a>
  </header>
    
</div>

<!-- Underneath purple block -->
<div class="wrapper">
  <h2 class="section__heading"> Promotions </h2>

  <section class="flights-list">
  <!-- Importing in flight(s) -->
  <?php require APP_ROOT . '/views/flights/flight.php'; ?>
  </section>
</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
