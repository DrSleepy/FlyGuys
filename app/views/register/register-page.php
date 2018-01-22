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
        <input id="email" class="input-row__input" name="email" type="email" >
      </div>
      <span id="error-email" class="error"> </span>

      <div class="input-row">
        <label class="input-row__label" for="email_confirm"> Email: </label>
        <input id="email_confirm" class="input-row__input" name="email_confirm" type="email" placeholder="confirm" >
      </div>
      <span id="error-email-confirm" class="error error--second"> </span>
  
      <div class="input-row">
        <label class="input-row__label" for="password"> Password: </label>
        <input id="password" class="input-row__input" name="password" type="password" >
      </div>
      <span id="error-password" class="error">  </span>

      <div class="input-row">
        <label class="input-row__label" for="password_confirm"> Password: </label>
        <input id="password_confirm" class="input-row__input" name="password_confirm" type="password" placeholder="confirm" >
      </div>
      <span id="error-password-confirm" class="error error--last">  </span>

      <button class="submit" type="submit"> Register </button>

      <!-- Span =output here for testing purposes -->
      <span id="error"></span>


    </div>
  </form>

  <a class="register" href="<?php echo PUBLIC_ROOT . '/Login' ?>"> Have an account? Login</a>
</div>
<?php require APP_ROOT . '/views/includes/footer.php'; ?>


<script type="module">

const validateForm = async (formInfo) => {
  // Ajax call
  const init = {
    method: 'POST',
    body: formInfo
  }
  const response = await fetch('/Register/registerUser', init)
  const textResponse = await response.text();
  return JSON.parse(textResponse);
}


const submit = async (event) => {
  event.preventDefault();

  const formInfo = new FormData(form);
  const response = await validateForm(formInfo);
  const formIsValid = response[0];

  console.log(response);
  
  const errorEl = document.querySelector('#error');

  !formIsValid 
  ? errorEl.innerHTML = "Incorrect credentials"
  : errorEl.innerHTML = '';    

}

// Selecting all 'add to cart' buttons and adding event listeners
const form = document.querySelector('#register-form');
form.addEventListener('submit', submit);
</script>