<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="/public/css/views/flights/flights-page.css">  

<div class="wrapper">
  <header class="header">
    <h1 class="header__title">Compare cheap flights</h1>
    <p class="header__text"> It’s deals time! Search to see prices from Fly Guys </p>
  </header>

  <!-- Importing in search bar -->
  <?php require APP_ROOT . '/views/flights/search.php'; ?>

  <section class="flights-list">

  <!-- Importing in flight(s) -->
  <?php require APP_ROOT . '/views/flights/flight.php'; ?>

  </section>

</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
