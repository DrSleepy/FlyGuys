<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="/public/css/views/flights/flights-page.css">  

<div class="wrapper">
  <header class="header">
    <h1 class="header__title">Your Wishlist</h1>
  </header>

  <section class="flights-list">

  <!-- Importing in flight(s) -->
  <?php require APP_ROOT . '/views/flights/flight.php'; ?>

  </section>
  
</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
