<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/login/style.css">  

<img class="cloud cloud-1" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.svg">     
<img class="cloud cloud-2" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.svg">

<div class="form-wrapper">
  <form id="login-form" class="form">
    <div class="form__top">
      <h1 class="heading"> Login </h1>
      <p class="help"> Please fill in your credentials to login </p>
    </div>

    <div class="form__bottom">
      <div class="input-row">
        <label class="input-row__label input-row__label--first" for="email"></label>
        <input id="email" class="input-row__input" name="email" type="" placeholder="Email">
      </div>
      
      <div class="input-row input-row--last">
        <label class="input-row__label input-row__label--last" for="password"></label>
        <input id="password" class="input-row__input" name="password" type="password" placeholder="Password">
      </div>

      <span id="error" class="error"></span>
      <button class="submit" type="submit"> Login </button>

    </div>
  </form>

  <a class="register" href="<?php echo PUBLIC_ROOT . '/Register' ?>"> No account? Register</a>
</div>
<?php require APP_ROOT . '/views/includes/footer.php'; ?>


<script type="module">

const validateForm = async (formInfo) => {
  // Ajax call
  const init = {
    method: 'POST',
    body: formInfo
  }
  const response = await fetch('/Login/logUserIn', init)
  const textResponse = await response.text();
  console.log(textResponse);
  return JSON.parse(textResponse);
}


const submit = async (event) => {
  event.preventDefault();

  const formInfo = new FormData(form);
  const response = await validateForm(formInfo);
  const formIsValid = response[0];
  
  const errorEl = document.querySelector('#error');

  !formIsValid 
  ? error.innerHTML = "Incorrect credentials"
  : error.innerHTML = '';    

}

// Selecting all 'add to cart' buttons and adding event listeners
const form = document.querySelector('#login-form');
form.addEventListener('submit', submit);
</script>