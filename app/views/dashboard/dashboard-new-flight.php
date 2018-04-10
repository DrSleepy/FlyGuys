<section id="new-flight-section" class="dropdown-section">
  <h3 class="subheading"> Outbound </h3>
  <div class="new-flight__info">
    <label class="new-flight__label new-flight__label--date" for="new-O-date"> Date </label>
    <label class="new-flight__label new-flight__label--dTime" for="new-O-dTime"> Departure Time </label>
    <label class="new-flight__label new-flight__label--dlocation" for="new-O-dlocation"> Depature Location </label>
    <label class="new-flight__label new-flight__label--lTime" for="new-O-lTime"> Landing Time </label>
    <label class="new-flight__label new-flight__label--lLocation" for="new-O-lLocation"> Landing Location </label>

    <input name="new-flight-O-date" id="new-O-date" class="new-flight__input new-flight__input--date" type="date" required> 
    <input name="new-flight-O-dTime" id="new-O-dTime" class="new-flight__input new-flight__input--dTime" type="time" value="00:00" required>
    <select name="new-flight-O-dlocation" id="new-O-dlocation" class="new-flight__input new-flight__input--dlocation" id="" name="" required>
      <option value="1"> Stansted </option>
    </select>
    <input name="new-flight-O-lTime" id="new-O-lTime" class="new-flight__input new-flight__input--lTime" type="time" value="00:00" required>
    <select name="new-flight-O-lLocation" id="new-O-lLocation" class="new-flight__input new-flight__input--lLocation" id="" required>
      <?php foreach ($data['airports'] as $airport) : ?>
      <option value="<?= $airport->airportID ?>"> <?= $airport->location ?> - <?= $airport->type ?> </option>  
      <?php endforeach ?> 
    </select>
  </div>
  <h3 class="subheading"> Inbound </h3>
  <div class="new-flight__info">
    <label class="new-flight__label new-flight__label--date" for="new-I-date"> Date </label>
    <label class="new-flight__label new-flight__label--dTime" for="new-I-dTime"> Departure Time </label>
    <label class="new-flight__label new-flight__label--dlocation" for="new-I-dlocation"> Depature Location </label>
    <label class="new-flight__label new-flight__label--lTime" for="new-I-lTime"> Landing Time </label>
    <label class="new-flight__label new-flight__label--lLocation" for="new-I-lLocation"> Landing Location </label>

    <input name="new-flight-I-date" id="new-I-date" class="new-flight__input new-flight__input--date" type="date" required>
    <input name="new-flight-I-dTime" id="new-I-dTime" class="new-flight__input new-flight__input--dTime" type="time" value="00:00" required>
    <select name="new-flight-I-dlocation" id="new-I-dlocation" class="new-flight__input new-flight__input--dlocation" id="" name="" required>
      <?php foreach ($data['airports'] as $airport) : ?>
      <option value="<?= $airport->airportID ?>"> <?= $airport->location ?> - <?= $airport->type ?> </option>  
      <?php endforeach ?> 
    </select>
    <input  name="new-flight-I-lTime" id="new-I-lTime" class="new-flight__input new-flight__input--lTime" type="time" value="00:00" required>
    <select name="new-flight-I-lLocation" id="new-I-lLocation" class="new-flight__input new-flight__input--lLocation" id="" name="" required>
      <option value="1"> Stansted </option>
    </select>
  </div>
  <div class="new-flight-bottom">
    
    <div class="new-flight-footer">
      <h3 class="subheading subheading--footer"> Class </h3>
      <h3 class="subheading subheading--footer"> Price </h3>
      
      <select name="new-flight-class" required> 
        <option value="First"> First </option>
        <option value="Business"> Business </option>     
        <option value="Economy"> Economy </option>               
      </select>
      <input name="new-flight-price" class="new-flight-footer__input" type="text" value="0">
    </div>

    <button type="submit" class="new-flight__add border-button"> Add </button>
  </div>
  
</section>

