<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/login/style.css">  

<img class="cloud cloud-1" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.png">     
<img class="cloud cloud-2" src="<?php echo PUBLIC_ROOT; ?>/img/icons/clouds.png">

<div class="form-wrapper">
  <form class="form" action="<?php echo PUBLIC_ROOT . '/users/login' ?>" method="POST">
    <div class="form__top">
      <h1 class="heading"> Login </h1>
      <p class="help"> Please fill in your credentials to login </p>
    </div>

    <div class="form__bottom">
      <div class="input-row input-row--first">
        <label class="input-row__label input-row__label--first" for="email"></label>
        <input class="input-row__input" id="email" type="email" placeholder="Email" required>
      </div>
  
      <div class="input-row input-row--last">
        <label class="input-row__label input-row__label--last" for="password"></label>
        <input class="input-row__input" id="password" type="password" placeholder="Password" required>
      </div>

      <button class="submit" type="submit"> Login </button>
    </div>
  </form>

  <a class="register" href="<?php echo PUBLIC_ROOT . '/users/register' ?>"> No account? Register</a>
</div>


<?php require APP_ROOT . '/views/includes/footer.php'; ?>
