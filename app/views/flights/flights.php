<?php require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/flights/style.css">  

<div class="wrapper wrapper-custom">
  <header class="header">
    <h1 class="header__title">Compare cheap flights</h1>
    <p class="header__text"> It’s deals time! Search to see prices from a huge range of airlines </p>
  </header>

  <form class="search-wrapper">
    <label class="search__label search__label--from" for="from"> Leaving from </label>
    <label class="search__label search__label--to" for="to"> Going to </label>
    <label class="search__label search__label--leaving" for="leaving"> Leaving on </label>
    <label class="search__label search__label--returning" for="returning"> Returning on </label>

    <input id="from" class="search__input search__input--from" type="text" placeholder="Enter airport">
    <input id="to" class="search__input search__input--to" type="text" placeholder="Enter airport">
    <input id="leaving" class="search__input search__input--leaving" type="date">
    <input id="returning" class="search__input search__input--returning" type="date">

    <div class="checkbox-options">
      <div class="checkbox-wrapper">
        <input id="one-way" class="checkbox" type="checkbox">
        <label class="checkbox__label" for="one-way">One Way</label>
      </div>
    
      <div class="checkbox-wrapper">
        <input id="two-way" class="checkbox" type="checkbox">
        <label class="checkbox__label" for="two-way">Two Way</label>
      </div>
    </div>

    <button type="submit" class="search-button"></button>
  </form>

  <section class="selections-wrapper">
    <p> View </p>
    <select class="select-menu select-menu--first">
      <option>10</option>
      <option>25</option>  
      <option>50</option>
      <option>75</option>
    </select>
    
    <p> Sort by </p>
    <select class="select-menu">
      <option>Price - Ascending</option>
      <option>Price - Descending</option>  
      <option>Departure - Earliest</option>
      <option>Departure - Latest</option>
    </select>
  </section>

  <section class="flights-list">

    <article class="flight-wrapper">
      <header class="flight-header">
        <img class="flight-header__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/airline_logo.svg">
        <h2 class="flight-header__airline"> Emirates Airline </h2>
        <p class="flight-header__price"> £604 </p>
        <button class="flight-header__button"> Add to cart </button>
      </header>

      <div class="flight-bound">
        <!-- outbound -->        
        <div class="flight-left">
          <i class="flight-left__plane-icon flight-left__plane-icon--outbound"></i>
          <p class="flight-left__subheading"> Outbound </p>
          <p class="flight-left__date"> 17 Jan Wed </p>        
        </div>

        <div class="flight-right">
          <p class="flight-right--from flight-right__time"> 08:35 </p>
          <p class="flight-right--from flight-right__location"> London </p>
          <p class="flight-right--from flight-right__airport"> Heathrow </p>

          <p class="flight-right--to flight-right__time"> 11:55 </p>
          <p class="flight-right--to flight-right__location"> Sudan </p>
          <p class="flight-right--to flight-right__airport"> Khartoum </p>
        </div>

        <!-- inbound -->
        <div class="flight-left">
          <i class="flight-left__plane-icon flight-left__plane-icon--inbound"></i>
          <p class="flight-left__subheading"> Outbound </p>
          <p class="flight-left__date"> 17 Jan Wed </p>        
        </div>

        <div class="flight-right">
          <p class="flight-right--from flight-right__time"> 08:35 </p>
          <p class="flight-right--from flight-right__location"> London </p>
          <p class="flight-right--from flight-right__airport"> Heathrow </p>

          <p class="flight-right--to flight-right__time"> 11:55 </p>
          <p class="flight-right--to flight-right__location"> Sudan </p>
          <p class="flight-right--to flight-right__airport"> Khartoum </p>
        </div>
      </div>
    </article>

    <article class="flight-wrapper">
      <header class="flight-header">
        <img class="flight-header__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/airline_logo.svg">
        <h2 class="flight-header__airline"> Emirates Airline </h2>
        <p class="flight-header__price"> £605 </p>
        <button class="flight-header__button"> Add to cart </button>
      </header>

      <div class="flight-bound">
        <!-- outbound -->        
        <div class="flight-left">
          <i class="flight-left__plane-icon flight-left__plane-icon--outbound"></i>
          <p class="flight-left__subheading"> Outbound </p>
          <p class="flight-left__date"> 17 Jan Wed </p>        
        </div>

        <div class="flight-right">
          <p class="flight-right--from flight-right__time"> 08:35 </p>
          <p class="flight-right--from flight-right__location"> London </p>
          <p class="flight-right--from flight-right__airport"> Heathrow </p>

          <p class="flight-right__time"> 11:55 </p>
          <p class="flight-right__location"> Sudan </p>
          <p class="flight-right__airport"> Khartoum </p>
        </div>

        <!-- inbound -->
        <div class="flight-left">
          <i class="flight-left__plane-icon flight-left__plane-icon--inbound"></i>
          <p class="flight-left__subheading"> Outbound </p>
          <p class="flight-left__date"> 17 Jan Wed </p>        
        </div>

        <div class="flight-right">
          <p class="flight-right--from flight-right__time"> 08:35 </p>
          <p class="flight-right--from flight-right__location"> London </p>
          <p class="flight-right--from flight-right__airport"> Heathrow </p>

          <p class="flight-right__time"> 11:55 </p>
          <p class="flight-right__location"> Sudan </p>
          <p class="flight-right__airport"> Khartoum </p>
        </div>
      </div>
    </article>

    <article class="flight-wrapper">
      <header class="flight-header">
        <img class="flight-header__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/airline_logo.svg">
        <h2 class="flight-header__airline"> Emirates Airline </h2>
        <p class="flight-header__price"> £607 </p>
        <button class="flight-header__button"> Add to cart </button>
      </header>

      <div class="flight-bound">
        <!-- outbound -->        
        <div class="flight-left">
          <i class="flight-left__plane-icon flight-left__plane-icon--outbound"></i>
          <p class="flight-left__subheading"> Outbound </p>
          <p class="flight-left__date"> 17 Jan Wed </p>        
        </div>

        <div class="flight-right">
          <p class="flight-right--from flight-right__time"> 08:35 </p>
          <p class="flight-right--from flight-right__location"> London </p>
          <p class="flight-right--from flight-right__airport"> Heathrow </p>

          <p class="flight-right__time"> 11:55 </p>
          <p class="flight-right__location"> Sudan </p>
          <p class="flight-right__airport"> Khartoum </p>
        </div>

        <!-- not inbound info -->
      </div>
    </article>

    <article class="flight-wrapper">
      <header class="flight-header">
        <img class="flight-header__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/airline_logo.svg">
        <h2 class="flight-header__airline"> Emirates Airline </h2>
        <p class="flight-header__price"> £607 </p>
        <button class="flight-header__button"> Add to cart </button>
      </header>

      <div class="flight-bound">
        <!-- outbound -->        
        <div class="flight-left">
          <i class="flight-left__plane-icon flight-left__plane-icon--outbound"></i>
          <p class="flight-left__subheading"> Outbound </p>
          <p class="flight-left__date"> 17 Jan Wed </p>        
        </div>

        <div class="flight-right">
          <p class="flight-right--from flight-right__time"> 08:35 </p>
          <p class="flight-right--from flight-right__location"> London </p>
          <p class="flight-right--from flight-right__airport"> Heathrow </p>

          <p class="flight-right__time"> 11:55 </p>
          <p class="flight-right__location"> Sudan </p>
          <p class="flight-right__airport"> Khartoum </p>
        </div>

        <!-- not inbound info -->
      </div>
    </article>

    <article class="flight-wrapper">
      <header class="flight-header">
        <img class="flight-header__logo" src="<?php echo PUBLIC_ROOT; ?>/img/icons/airline_logo.svg">
        <h2 class="flight-header__airline"> Emirates Airline </h2>
        <p class="flight-header__price"> £607 </p>
        <button class="flight-header__button"> Add to cart </button>
      </header>

      <div class="flight-bound">
        <!-- outbound -->        
        <div class="flight-left">
          <i class="flight-left__plane-icon flight-left__plane-icon--outbound"></i>
          <p class="flight-left__subheading"> Outbound </p>
          <p class="flight-left__date"> 17 Jan Wed </p>        
        </div>

        <div class="flight-right">
          <p class="flight-right--from flight-right__time"> 08:35 </p>
          <p class="flight-right--from flight-right__location"> London </p>
          <p class="flight-right--from flight-right__airport"> Heathrow </p>

          <p class="flight-right__time"> 11:55 </p>
          <p class="flight-right__location"> Sudan </p>
          <p class="flight-right__airport"> Khartoum </p>
        </div>

        <!-- not inbound info -->
      </div>
    </article>

  </section>

</div>

<?php require APP_ROOT . '/views/includes/footer.php'; ?>
