<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/checkout/style.css">  

<div class="wrapper">
  <form action="" class="checkout-form">
    <header class="form__header">
      <h1 class="form__title"> Checkout </h1>
    </header>

    <div class="sections-wrapper">
      <section class="section">
        <header class="section__header">
          <i class="header__icon header__icon--1"></i>
          <h2 class="header__heading"> Personal Information </h2>
        </header>

        <div class="section__row">
          <label class="section__label" for=""> Title </label>
          <select class="section__input--title" name="" id="">
            <option value=""> Mr </option>
            <option value=""> Mrs </option>
            <option value=""> Ms </option>
          </select>
        </div>

        <div class="section__row">
          <label class="section__label" for=""> First name </label>
          <input class="section__input" type="text">
        </div>

        <div class="section__row">
          <label class="section__label" for=""> Last name </label>
          <input class="section__input" type="text">
        </div>
      </section>

      <section class="section">
        <header class="section__header">
          <i class="header__icon header__icon--2"></i>
          <h2 class="header__heading"> Contact Information </h2>
        </header>

        <div class="section__row">
          <label class="section__label" for=""> Email </label>
          <input class="section__input" type="text">
        </div>

        <div class="section__row">
          <label class="section__label" for=""> Home Number </label>
          <input class="section__input section__input--half" type="text">
        </div>

        <div class="section__row">
          <label class="section__label" for=""> Mobile Number </label>
          <input class="section__input section__input--half" type="text">
        </div>
      </section>

      <section class="section section--last">
        <header class="section__header">
          <i class="header__icon header__icon--3"></i>
          <h2 class="header__heading"> Address Information </h2>
        </header>

        <div class="section__row">
          <label class="section__label" for=""> Address </label>
          <input class="section__input" type="text">
        </div>

        <div class="section__row">
          <label class="section__label" for=""> Address continued (optional) </label>
          <input class="section__input" type="text">
        </div>

        <div class="section__row">
          <label class="section__label" for=""> Town/City </label>
          <input class="section__input" type="text">
        </div>

        <div class="section__row">
          <label class="section__label" for=""> Postcode </label>
          <input class="section__input section__input--half" type="text">
        </div>

        <div class="section__row">
          <label class="section__label" for=""> Country </label>
          <input class="section__input" type="text">
        </div>
      </section>
    </div>
    <footer class="form__footer">
      <button class="form__submit-button" type="submit"> Payment </button>
    </footer>
  </form>
</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
