<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ROOT; ?>/css/views/flights/search/style.css">  

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