<section id="promotions-section" class="dropdown-section destination-section">
  <div class="destination-item">
    <h3 class="subheading subheading--destination"> Destination </h3>
    <select name="promotion-destination" required>
      <?php foreach ($data['airports'] as $airport) : ?>
      <option value="<?= $airport->airportID ?>"> <?= $airport->location ?> - <?= $airport->type ?> </option>    
      <?php endforeach ?>  
    </select>
  </div>
  <div class="destination-item" >
    <h3 class="subheading subheading--destination "> Date </h3>
    <input type="date" name="promotion-date" required>
    <button type="submit" class="border-button"> Promote </button>
  </div>
</section>
