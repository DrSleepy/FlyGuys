<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/register/style.css">  

<img class="cloud cloud-1" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.svg">     
<img class="cloud cloud-2" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.svg">

<div class="form-wrapper">
  <form class="form" action="<?php echo PUBLIC_ROOT . '/users/register' ?>" method="POST">
    <div class="form__top">
      <h1 class="heading"> Register </h1>
      <p class="help"> Please fill out this form to register with us </p>
    </div>

    <div class="form__bottom">
      <div class="input-row input-row--first">
        <label class="input-row__label" for="email"> Email: </label>
        <input class="input-row__input" id="email" type="email" required>
      </div>

      <div class="input-row input-row--second">
        <label class="input-row__label" for="email_confirm"> Email: </label>
        <input class="input-row__input" id="email_confirm" type="email" placeholder="confirm" required>
      </div>
  
      <div class="input-row">
        <label class="input-row__label" for="password"> Password: </label>
        <input class="input-row__input" id="password" type="password" required>
      </div>

      <div class="input-row input-row--last">
        <label class="input-row__label" for="password_confirm"> Password: </label>
        <input class="input-row__input" id="password_confirm" type="password" placeholder="confirm" required>
      </div>

      <button class="submit" type="submit"> Register </button>
    </div>
  </form>

  <a class="register" href="<?php echo PUBLIC_ROOT . '/Login' ?>"> Have an account? Login</a>
</div>


<?php require APP_ROOT . '/views/includes/footer.php'; ?>
