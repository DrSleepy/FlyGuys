<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="/public/css/views/checkout/checkout-page.css">  

<div class="wrapper">
  <form id="checkout-form" class="checkout-form" action="/Charge" method="POST">
    <header class="form__header">
      <h1 class="form__title"> Checkout </h1>
    </header>

    <div class="sections-wrapper">
      <section class="section-checkout">
        <header class="section-checkout__header">
          <i class="header__icon header__icon--1"></i>
          <h2 class="header__heading"> Personal Information </h2>
        </header>

        <div class="section__row">
          <label class="section__label" for="input_first_name"> First name </label>
          <input id="input_first_name" class="section__input" name="first_name" type="text" value="<?= $customer->firstName ?>" required>
          <label id="first_name" class="error" for="input_first_name"> </label>
        </div>

        <div class="section__row">
          <label class="section__label" for="input_last_name"> Last name </label>
          <input id="input_last_name" class="section__input" name="last_name" type="text" value="<?= $customer->surName ?>" required>
          <label id="last_name" class="error" for="input_last_name"> </label>
        </div>
      </section>

      <section class="section-checkout">
        <header class="section-checkout__header">
          <i class="header__icon header__icon--2"></i>
          <h2 class="header__heading"> Contact Information </h2>
        </header>

        <div class="section__row">
          <label class="section__label" for="input_home_number"> Home Telephone </label>
          <input id="input_home_number" class="section__input section__input--half" name="home_number" type="tel" value="<?= $customer->home_number ?>" required>
          <label id="home_number" class="error" for="input_home_number"> </label>
        </div>

        <div class="section__row">
          <label class="section__label" for="input_mobile_number"> Mobile Number </label>
          <input id="input_mobile_number" class="section__input section__input--half" name="mobile_number" type="tel" value="<?= $customer->mobile_number ?>" required>
          <label id="mobile_number" class="error" for="input_mobile_number"> </label>
        </div>
      </section>

      <section class="section-checkout section--last">
        <header class="section-checkout__header">
          <i class="header__icon header__icon--3"></i>
          <h2 class="header__heading"> Address Information </h2>
        </header>

        <div class="section__row">
          <label class="section__label" for="input_address"> Address </label>
          <input id="input_address" class="section__input" name="address" type="text" value="<?= $customer->address ?>"  required>
          <label id="address" class="error" for="input_address"> </label>          
        </div>

        <div class="section__row">
          <label class="section__label" for="input_address_optional"> Address continued (optional) </label>
          <input id="input_address_optional" class="section__input" name="address_optional" value="<?= $customer->address_optional ?>"  type="text">
          <label id="address_optional" class="error" for="input_address_optional"> </label> 
        </div>

        <div class="section__row">
          <label class="section__label" for="input_town_city"> Town/City </label>
          <input id="input_town_city" class="section__input" name="town_city" type="text" value="<?= $customer->town_city ?>"  required>
          <label id="town_city" class="error" for="input_town_city"> </label>
        </div>

        <div class="section__row">
          <label class="section__label" for="input_country"> Country </label>
          <input id="input_country" class="section__input" name="country" type="text" value="<?= $customer->surName ?>" required>
          <label id="country" class="error" for="input_country"> </label>                    
        </div>

        <div class="section__row">
          <label class="section__label" for="input_postcode"> Postcode </label>
          <input id="input_postcode" class="section__input section__input--half" name="postcode" type="text" value="<?= $customer->postcode ?>" required>
          <label id="postcode" class="error" for="input_postcode"> </label>          
        </div>
      </section>

    </div>
    <footer class="form__footer">
      <input id="stripeToken" name="stripeToken" type="hidden">
      <button class="form__submit-button" type="submit"> Continue to payment </button>
    </footer>
  </form>
</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script type="module" src="/public/js/views/checkout.js"></script>

