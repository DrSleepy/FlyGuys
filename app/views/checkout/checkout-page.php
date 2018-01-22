<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/checkout/style.css">  

<div class="wrapper">
  <form id="checkout-form" class="checkout-form">
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
          <label class="section__label" for="input_first_name"> First name </label>
          <input id="input_first_name" class="section__input" name="first_name" type="text" required>
          <label id="first_name" class="error" for="input_first_name"> </label>
        </div>

        <div class="section__row">
          <label class="section__label" for="input_last_name"> Last name </label>
          <input id="input_last_name" class="section__input" name="last_name" type="text" required>
          <label id="last_name" class="error" for="input_last_name"> </label>
        </div>
      </section>

      <section class="section">
        <header class="section__header">
          <i class="header__icon header__icon--2"></i>
          <h2 class="header__heading"> Contact Information </h2>
        </header>

        <div class="section__row">
          <label class="section__label" for="input_email"> Email </label>
          <input id="input_email" class="section__input" name="email" type="email" required>
          <label id="email" class="error" for="input_email"> </label>
        </div>

        <div class="section__row">
          <label class="section__label" for="input_home_number"> Home Number </label>
          <input id="input_home_number" class="section__input section__input--half" name="home_number" type="tel" required>
          <label id="home_number" class="error" for="input_home_number"> </label>
        </div>

        <div class="section__row">
          <label class="section__label" for="input_mobile_number"> Mobile Number </label>
          <input id="input_mobile_number" class="section__input section__input--half" name="mobile_number" type="tel" required>
          <label id="mobile_number" class="error" for="input_mobile_number"> </label>
        </div>
      </section>

      <section class="section section--last">
        <header class="section__header">
          <i class="header__icon header__icon--3"></i>
          <h2 class="header__heading"> Address Information </h2>
        </header>

        <div class="section__row">
          <label class="section__label" for="input_address"> Address </label>
          <input id="input_address" class="section__input" name="address" type="text" required>
          <label id="address" class="error" for="input_address"> </label>          
        </div>

        <div class="section__row">
          <label class="section__label" for="input_address_optional"> Address continued (optional) </label>
          <input id="input_address_optional" class="section__input" name="address_optional" type="text">
          <label id="address_optional" class="error" for="input_address_optional"> </label> 
        </div>

        <div class="section__row">
          <label class="section__label" for="input_town_city"> Town/City </label>
          <input id="input_town_city" class="section__input" name="town_city" type="text" required>
          <label id="town_city" class="error" for="input_town_city"> </label>
        </div>

        <div class="section__row">
          <label class="section__label" for="input_postcode"> Postcode </label>
          <input id="input_postcode" class="section__input section__input--half" name="postcode" type="text" required>
          <label id="postcode" class="error" for="input_postcode"> </label>          
        </div>

        <div class="section__row">
          <label class="section__label" for="input_country"> Country </label>
          <input id="input_country" class="section__input" name="country" type="text" required>
          <label id="country" class="error" for="input_country"> </label>                    
        </div>
      </section>
    </div>
    <footer class="form__footer">
      <button class="form__submit-button" type="submit"> Payment </button>
    </footer>
  </form>
</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>

<script type="module">
import validateForm from '/public/js/modules/validateForm.js';
import appendErrors from '/public/js/modules/appendErrors.js';

const formErrors = (data) => {
  const errors = data[1];
  const errorElements = [
    '#first_name',
    '#last_name',
    '#email',
    '#home_number',
    '#mobile_number',
    '#address',
    '#town_city',
    '#postcode',
    '#country'                                                                          
  ];
  appendErrors(errors, errorElements);
}

const submit = async (event) => {
  event.preventDefault();
  const formInfo = new FormData(form);
  const response = await validateForm('/Checkout/checkoutUser', formInfo);
  formErrors(response);
}

// Selecting all 'add to cart' buttons and adding event listeners
const form = document.querySelector('#checkout-form');
form.addEventListener('submit', submit);
</script>