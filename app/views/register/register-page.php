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
        <label class="input-row__label" for="input_email"> Email: </label>
        <input id="input_email" class="input-row__input" name="email" type="email" required>
      </div>
      <label id="email" class="error" for="input_email"> </label>

      <div class="input-row">
        <label class="input-row__label" for="input_email_confirm"> Email: </label>
        <input id="input_email_confirm" class="input-row__input" name="email_confirm" type="email" placeholder="confirm" required>
      </div>
      <label id="email_confirm" class="error error--second" for="input_email_confirm"> </label>
  
      <div class="input-row">
        <label class="input-row__label" for="input_password"> Password: </label>
        <input id="input_password" class="input-row__input" name="password" type="password" required>
      </div>
      <label id="password" class="error" for="input_password">  </label>

      <div class="input-row">
        <label class="input-row__label" for="input_password_confirm"> Password: </label>
        <input id="input_password_confirm" class="input-row__input" name="password_confirm" type="password" placeholder="confirm" required>
      </div>
      <label id="password_confirm" class="error error--last" for="input_password_confirm"> </label>

      <button class="submit" type="submit"> Register </button>
    </div>
  </form>

  <a class="register" href="<?php echo PUBLIC_ROOT . '/Login' ?>"> Have an account? Login</a>
</div>
<?php require APP_ROOT . '/views/includes/footer.php'; ?>


<script type="module">
import validateForm from '/public/js/modules/validateForm.js';
import appendErrors from '/public/js/modules/appendErrors.js';

const formErrors = (data) => {
  const errors = data[1];
  const errorElements = [
    '#email',
    '#email_confirm',
    '#password',   
    '#password_confirm'            
  ];
  appendErrors(errors, errorElements);
}

const submit = async (event) => {
  event.preventDefault();
  const formInfo = new FormData(form);
  const response = await validateForm('/Register/registerUser', formInfo);
  formErrors(response);
}

// Selecting all 'add to cart' buttons and adding event listeners
const form = document.querySelector('#register-form');
form.addEventListener('submit', submit);
</script>