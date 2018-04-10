<section id="destinations-section" class="dropdown-section destination-section">
  <form class="destination-item destination-item--three" action="/Dashboard" method="POST">
    <h3 class="subheading subheading--destination"> Create Destination </h3>
    <input type="text" name="destination-name-create" required>
    <select name="destination-type" required>
      <option value="Domestic"> Domestic </option>
      <option value="Europe"> Europe </option>      
    </select>
    <button type="submit" class="border-button"> Create </button>
  </form>
  <form class="destination-item" action="/Dashboard" method="POST">
    <h3 class="subheading subheading--destination subheading--destination-delete"> Detele Destination </h3>
    <select name="destination-name-delete" required>
      <?php foreach ($data['airports'] as $airport) : ?>
      <option value="<?= $airport->airportID ?>"> <?= $airport->location ?> - <?= $airport->type ?> </option>  
      <?php endforeach ?>  
    </select>
    <button type="submit" class="border-button red-button"> Delete </button>
  </form>
</section>
