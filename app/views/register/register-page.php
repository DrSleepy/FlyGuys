<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="/public/css/views/register/register-page.css">  

<img class="cloud cloud-1" src="/public/assets/icons/clouds.svg">     
<img class="cloud cloud-2" src="/public/assets/icons/clouds.svg">

<div class="form-wrapper">
  <form id="register-form" class="form">
    <div class="form__top">
      <h1 class="title"> Register </h1>
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
        <input id="input_email_confirm" class="input-row__input" name="email_confirm" type="email"  placeholder="confirm" required>
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

  <a class="register" href="/Login"> Have an account? Login</a>
</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
<script type="module" src="/public/js/views/register.js"></script>
