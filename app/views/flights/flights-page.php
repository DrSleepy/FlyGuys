<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/flights/main/style.css">  

<div class="wrapper wrapper-custom">
  <header class="header">
    <h1 class="header__title">Compare cheap flights</h1>
    <p class="header__text"> It’s deals time! Search to see prices from a huge range of airlines </p>
  </header>

  <div>

  </div>
  <!-- Importing in search bar -->
  <?php require APP_ROOT . '/views/flights/search.php'; ?>

  <section class="selections-wrapper">
    <p> View </p>
    <select class="select-menu select-menu--first">
      <option>10</option>
      <option>25</option>  
      <option>50</option>
      <option>75</option>
    </select>
    
    <p> Sort by </p>
    <select class="select-menu">
      <option>Price - Ascending</option>
      <option>Price - Descending</option>  
      <option>Departure - Earliest</option>
      <option>Departure - Latest</option>
    </select>
  </section>

  <section class="flights-list">

  <!-- Importing in flight(s) -->
  <?php require APP_ROOT . '/views/flights/flight.php'; ?>


  </section>

</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
