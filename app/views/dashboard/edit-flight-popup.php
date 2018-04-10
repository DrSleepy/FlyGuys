<link rel="stylesheet" type="text/css" href="/public/css/views/dashboard/dashboard-page.css"> 

<form action="/Dashboard" method="POST" id="edit-popup-wrapper" class="edit-popup-wrapper">
  <div class="edit-popup">
    <h2 class="section__header edit-popup-header"> Edit flight</h2>
    <div class="edit-section">
      <h3 class="subheading"> Outbound </h3>
      <div class="new-flight__info">
        <label class="new-flight__label new-flight__label--date" for="new-O-date"> Date </label>
        <label class="new-flight__label new-flight__label--dTime" for="new-O-dTime"> Departure Time </label>
        <label class="new-flight__label new-flight__label--dlocation" for="new-O-dlocation"> Depature Location </label>
        <label class="new-flight__label new-flight__label--lTime" for="new-O-lTime"> Landing Time </label>
        <label class="new-flight__label new-flight__label--lLocation" for="new-O-lLocation"> Landing Location </label>

        <input name="edit-flight-O-date" id="new-O-date" class="new-flight__input new-flight__input--date" type="date" required>
        <input name="edit-flight-O-dTime" id="new-O-dTime" class="new-flight__input new-flight__input--dTime" type="time" value="00:00" required>
        <select name="edit-flight-O-dlocation" id="new-O-dlocation" class="new-flight__input new-flight__input--dlocation" required>
          <option value="1" selected> Stansted </option>
        </select>
        <input name="edit-flight-O-lTime" id="new-O-lTime" class="new-flight__input new-flight__input--lTime" type="time" value="00:00" required>
        <select name="edit-flight-O-lLocation" id="new-O-lLocation" class="new-flight__input new-flight__input--lLocation" required>
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

        <input name="edit-flight-I-date" id="new-I-date" class="new-flight__input new-flight__input--date" type="date" required>
        <input name="edit-flight-I-dTime" id="new-I-dTime" class="new-flight__input new-flight__input--dTime" type="time" value="00:00" required>
        <select name="edit-flight-I-dlocation" id="new-I-dlocation" class="new-flight__input new-flight__input--dlocation" required>
          <?php foreach ($data['airports'] as $airport) : ?>
          <option value="<?= $airport->airportID ?>"> <?= $airport->location ?> - <?= $airport->type ?> </option>  
          <?php endforeach ?> 
        </select>
        <input name="edit-flight-I-lTime" id="new-I-lTime" class="new-flight__input new-flight__input--lTime" type="time" value="00:00" required>
        <select name="edit-flight-I-lLocation" id="new-I-lLocation" class="new-flight__input new-flight__input--lLocation" required>
          <option value="1" selected> Stansted </option>
        </select>
      </div>
      <div class="new-flight-footer">
        <h3 class="subheading subheading--footer"> Class </h3>
        <h3 class="subheading subheading--footer"> Price </h3>
        <select name="edit-flight-class" id="new-flight-class" required> 
          <option value="First Class"> First Class </option>
          <option value="Business Class"> Business Class </option>     
          <option value="Economy Class"> Economy Class </option>               
        </select>
        <input name="edit-flight-price" id="edit-price" class="new-flight-footer__input" type="text" required>
        <div class="edit-buttons">
          <button type="button" id="cancel-popup" class="edit-section__button--cancel"> Cancel </button>      
          <button type="submit" id="update-button" class="edit-section__button--update"> Update </button>
          <input type="hidden" name="update-flight" value="1">      
          <input type="hidden" id="flightID" name="flightID">   
          <input type="hidden" id="returnFlightID" name="returnFlightID">                                       
        </div>
      </div>
    </div>
  </div>
</form>
