<?php
class Cart {
  private $itemIds = []; //Array list of IDs
  private $items = []; //Array of full items (price, location, length etc)

  function __construct($xxx) {
    $this->load();
  }

  function load() {
    // fetch all items from database using $this->itemIds and load into $this->items
  }
  
  function add($id) {
    // fetch $id from database and add it to $this->items   
  }

  function remove($id) {
    // unset (remove) $id from $this->items       
  }

  function numberOfItems() {
    // count length of $this->items    
  }
  
  function allItems() {
    // return $this->items        
  }
  
  function totalCost() {
    // loop through $this->items, adding ['price'] of item on each loop
  }
}

?>