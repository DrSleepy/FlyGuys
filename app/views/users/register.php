<? require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<? echo PUBLIC_ROOT; ?>/css/views/register/style.css">  

<img class="cloud cloud-1" src="<? echo PUBLIC_ROOT; ?>/img/icons/clouds.png">     
<img class="cloud cloud-2" src="<? echo PUBLIC_ROOT; ?>/img/icons/clouds.png">

<div class="form-wrapper">
  <form class="form" action="<? echo PUBLIC_ROOT . '/users/register' ?>" method="POST">
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
        <label class="input-row__label" for="email"> Email: </label>
        <input class="input-row__input" id="email" type="email" required>
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

  <a class="register" href="<? echo PUBLIC_ROOT . '/users/login' ?>"> Already have an account? Login</a>
</div>


<? require APP_ROOT . '/views/includes/footer.php'; ?>
