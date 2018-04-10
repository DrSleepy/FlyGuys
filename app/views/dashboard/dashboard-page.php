<?php require APP_ROOT . '/views/includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="/public/css/views/dashboard/dashboard-page.css">  

<div class="wrapper">
  <h1 class="page-heading"> Dashboard </h1>

  <form class="section" action="/Dashboard" method="POST">
    <header class="section__header">
      <label for="new-flight-checkbox">
        <input id="new-flight-checkbox" class="section__checkbox" type="checkbox">
        <h2 class="heading"> Create new flight</h2>
      </label>
    </header>
    <!-- code for section here -->
    <?php require APP_ROOT . '/views/dashboard/dashboard-new-flight.php' ?>
  </form>

  <form class="section">
    <header class="section__header">
      <label for="edit-flight-checkbox">
        <input id="edit-flight-checkbox" class="section__checkbox" type="checkbox">
        <h2 class="heading"> Quick Edit - Latest flights </h2>
      </label>
    </header>
    <!-- code for section here -->
    <?php require APP_ROOT . '/views/dashboard/dashboard-quick-edit.php' ?>
  </form>

  <form class="section" action="/Dashboard" method="POST">
    <header class="section__header">
      <label for="promotions-checkbox">
        <input id="promotions-checkbox" class="section__checkbox" type="checkbox">
        <h2 class="heading"> Promotions </h2>
      </label>
    </header>
    <!-- code for section here -->
    <?php require APP_ROOT . '/views/dashboard/dashboard-promotions.php' ?>
  </form>

  <div class="section">
    <header class="section__header">
      <label for="destinations-checkbox">
        <input id="destinations-checkbox" class="section__checkbox" type="checkbox">
        <h2 class="heading"> Destinations </h2>
      </label>
    </header>
    <!-- code for section here -->
    <?php require APP_ROOT . '/views/dashboard/dashboard-destinations.php' ?>
  </div>

</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
<script src="/public/js/views/dashboard.js"></script>
