<link rel="stylesheet" type="text/css" href="/public/css/views/flights/search.css">  

<form action="/Flights" method="POST" class="search-wrapper">
  <label class="search__label search__label--from" for="from"> Leaving from </label>
  <label class="search__label search__label--to" for="to"> Going to </label>
  <label class="search__label search__label--leaving" for="leaving"> Leaving on </label>
  <label class="search__label search__label--returning" for="returning"> Returning on </label>
  <label class="search__label search__label--day" for="day"> Leaving Day </label>  

  <select id="from" class="search__input search__input--from" name="leavingFrom" type="text" placeholder="Enter airport" required>
    <option value="Stansted"> Stansted </option>       
  </select>
  <select id="to" class="search__input search__input--to" name="goingTo" type="text" placeholder="Enter airport" required>
    <option value="anywhere"> Anywhere </option>
    <?php foreach ($data['airports'] as $airport) : ?>
    <option value="<?= $airport->location ?>"> <?= $airport->location ?> - <?= $airport->type ?> </option>    
    <?php endforeach ?>  
  </select>

  <input id="leaving" class="search__input search__input--leaving" name="dateFrom" type="date">
  <input id="returning" class="search__input search__input--returning" name="dateTo" type="date">

  <select id="day" class="search__input search__input--day" name="day">
    <option value="any"> Any </option>
    <option value="Monday"> Monday </option>
    <option value="Tuesday"> Tuesday </option>
    <option value="Wednesday"> Wednesday </option>
    <option value="Thursday"> Thursday </option>    
    <option value="Friday"> Friday </option>        
  </select>

  <button type="submit" class="search-button"></button>
</form>
