<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/login/style.css">  

<img class="cloud cloud-1" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.svg">     
<img class="cloud cloud-2" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.svg">
<?php print_r($data) ?>
<div class="form-wrapper">
  <form id="login-form" class="form" action="<?php echo PUBLIC_ROOT . '/users/login' ?>" method="POST">
    <div class="form__top">
      <h1 class="heading"> Login </h1>
      <p class="help"> Please fill in your credentials to login </p>
    </div>

    <div class="form__bottom">
      <div class="input-row">
        <label class="input-row__label input-row__label--first" for="email"></label>
        <input id="email" class="input-row__input" name="email" type="email" placeholder="Email" required>
      </div>
      
      <div class="input-row input-row--last">
        <label class="input-row__label input-row__label--last" for="password"></label>
        <input id="password" class="input-row__input" name="password" type="password" placeholder="Password" required>
      </div>

      <span class="error"> Please enter your correct credentials! </span>
      <button class="submit" type="submit"> Login </button>
      <span id="output"></span>
    </div>
  </form>

  <a class="register" href="<?php echo PUBLIC_ROOT . '/Register' ?>"> No account? Register</a>
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
const form = document.querySelector('#login-form');
form.addEventListener('submit', addFlightToCart);
</script>