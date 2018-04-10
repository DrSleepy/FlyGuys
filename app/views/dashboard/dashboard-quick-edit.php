<section id="edit-flight-section" class="dropdown-section dropdown-section--edit">
  <div class="table">
    <div class="table-header">
      <p> Price </p>
      <p> To </p>
      <p> Departure </p>
    </div>

    <?php foreach($data['latestFlights'] as $flight) : ?>   
    <div class="table-row">        
      <p> £ <?= $flight->price ?> </p>
      <p> <?= $flight->outboundLandingLocation ?> </p>
      <p> <?= $flight->flightDate ?> </p>
      <button id="edit-button" class="row__edit border-button" data-flight="<?= htmlspecialchars(json_encode($flight)) ?>"> Edit </button>
    </div> 
    <?php endforeach ?>                   
  </div>
</section>
