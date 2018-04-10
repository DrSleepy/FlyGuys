<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="/public/css/views/login/login-page.css">  

<img class="cloud cloud-1" src="/public/assets/icons/clouds.svg">     
<img class="cloud cloud-2" src="/public/assets/icons/clouds.svg">

<div class="form-wrapper">
  <form id="login-form" class="form">
    <div class="form__top">
      <h1 class="title"> Login </h1>
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
  <a class="register" href="/Register"> No account? Register</a>
</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
<script type="module" src="/public/js/views/login.js"></script>

