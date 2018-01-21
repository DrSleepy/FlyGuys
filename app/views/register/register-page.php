<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/register/style.css">  

<img class="cloud cloud-1" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.svg">     
<img class="cloud cloud-2" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.svg">

<div class="form-wrapper">
  <form id="register-form" class="form" action="<?php echo PUBLIC_ROOT . '/users/register' ?>" method="POST">
    <div class="form__top">
      <h1 class="heading"> Register </h1>
      <p class="help"> Please fill out this form to register with us </p>
    </div>

    <div class="form__bottom">
      <div class="input-row">
        <label class="input-row__label" for="email"> Email: </label>
        <input id="email" class="input-row__input" name="email" type="email" required>
      </div>
      <span class="error"> Please enter your correct credentials! </span>

      <div class="input-row">
        <label class="input-row__label" for="email_confirm"> Email: </label>
        <input id="email_confirm" class="input-row__input" name="email_confirm" type="email" placeholder="confirm" required>
      </div>
      <span class="error error--second"> Please enter your correct credentials! </span>
  
      <div class="input-row">
        <label class="input-row__label" for="password"> Password: </label>
        <input id="password" class="input-row__input" name="password" type="password" required>
      </div>
      <span class="error"> Please enter your correct credentials! </span>

      <div class="input-row">
        <label class="input-row__label" for="password_confirm"> Password: </label>
        <input id="password_confirm" class="input-row__input" name="password_confirm" type="password" placeholder="confirm" required>
      </div>
      <span class="error error--last"> Please enter your correct credentials! </span>

      <button class="submit" type="submit"> Register </button>

      <!-- Span =output here for testing purposes -->
      <span id="output"></span>


    </div>
  </form>

  <a class="register" href="<?php echo PUBLIC_ROOT . '/Login' ?>"> Have an account? Login</a>
</div>
<?php require APP_ROOT . '/views/includes/footer.php'; ?>


<script type="module">
import ajax from '/public/js/modules/ajax.js';

const addFlightToCart = async (event) => {
  event.preventDefault();
  
  const formInfo = new FormData(form);
  const result = await ajax.post('/Carts/addToCart', formInfo);
  
  const output = document.querySelector('#output');
  output.innerHTML = result;
}

// Selecting all 'add to cart' buttons and adding event listeners
const form = document.querySelector('#register-form');
form.addEventListener('submit', addFlightToCart);
</script>