<? require APP_ROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<? echo PUBLIC_ROOT; ?>/css/views/flights/style.css">  
<div class="wrapper wrapper-custom">
  <header class="header">
    <h1 class="title">Compare cheap flights</h1>
    <p class="text"> It’s deals time! Search to see prices from a huge range of airlines </p>
  </header>

  <form class="search-wrapper">
    <label class="search__label search__label--from" for="from"> From </label>
    <label class="search__label search__label--to" for="to"> To </label>
    <label class="search__label search__label--adults" for="adults"> Adults </label>
    <label class="search__label search__label--kids" for="kids"> Age 2-11 </label>
    <label class="search__label search__label--infants" for="infants"> Under 2 </label>

    <!-- <input id="from" class="search__input search__input--from" type="text" placeholder="Enter Airport">
    <input id="to" class="search__input search__input--to" type="text" placeholder="Enter Airport">
    <input id="adults" class="search__input search__input--adults" type="number">
    <input id="kids" class="search__input search__input--kids" type="number">
    <input id="infants" class="search__input search__input--infants" type="number"> -->

    <input id="from" class="search__input search__input--from" type="text" placeholder="Enter Airport">
    <input id="to" class="search__input search__input--to" type="text" placeholder="Enter Airport">
    <select class="search__input search__input--adults">
      <option>1</option>
      <option>2</option>  
      <option>3</option>
      <option>4</option>
      <option>5</option> 
    </select>
    <select class="search__input search__input--kids">
      <option>1</option>
      <option>2</option>  
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <select class="search__input search__input--infants">
      <option>1</option>
      <option>2</option>  
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    
    <button type="submit" class="search-button"></button>

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

  <div class="flights-list">

    <article class="flight-wrapper"> <!-- This element will be dynamically duplicated  -->
      <img class="flight__logo" src="<? echo PUBLIC_ROOT; ?>/img/icons/rocket.png">
      
      <p class="flight__label flight__label--from" > From: </p>
      <p class="flight__label flight__label--to" > To: </p>
      <p class="flight__label flight__label--departure" > Departure: </p>
      <p class="flight__label flight__label--return" > Return: </p>
      
      <p class="flight__data flight__data--from" > London, Heathrow </p>
      <p class="flight__data flight__data--to" > Sudan, Khartoum </p>
      <p class="flight__data flight__data--departure" > July 27, 08:30am </p>
      <p class="flight__data flight__data--return" > July 29, 05:25pm </p>

      <p class="flight__price"> £604 </p>
      <button class="flight__book"> Book </button>
    </article>
    <article class="flight-wrapper"> <!-- This element will be dynamically duplicated  -->
      <img class="flight__logo" src="<? echo PUBLIC_ROOT; ?>/img/icons/rocket.png">
      
      <p class="flight__label flight__label--from" > From: </p>
      <p class="flight__label flight__label--to" > To: </p>
      <p class="flight__label flight__label--departure" > Departure: </p>
      <p class="flight__label flight__label--return" > Return: </p>
      
      <p class="flight__data flight__data--from" > London, Heathrow </p>
      <p class="flight__data flight__data--to" > Sudan, Khartoum </p>
      <p class="flight__data flight__data--departure" > July 27, 08:30am </p>
      <p class="flight__data flight__data--return" > July 29, 05:25pm </p>

      <p class="flight__price"> £604 </p>
      <button class="flight__book"> Book </button>
    </article>
    <article class="flight-wrapper"> <!-- This element will be dynamically duplicated  -->
      <img class="flight__logo" src="<? echo PUBLIC_ROOT; ?>/img/icons/rocket.png">
      
      <p class="flight__label flight__label--from" > From: </p>
      <p class="flight__label flight__label--to" > To: </p>
      <p class="flight__label flight__label--departure" > Departure: </p>
      <p class="flight__label flight__label--return" > Return: </p>
      
      <p class="flight__data flight__data--from" > London, Heathrow </p>
      <p class="flight__data flight__data--to" > Sudan, Khartoum </p>
      <p class="flight__data flight__data--departure" > July 27, 08:30am </p>
      <p class="flight__data flight__data--return" > July 29, 05:25pm </p>

      <p class="flight__price"> £604 </p>
      <button class="flight__book"> Book </button>
    </article>

</div>

</div>
<? require APP_ROOT . '/views/includes/footer.php'; ?>
