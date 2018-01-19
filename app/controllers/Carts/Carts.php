<?php 

class Carts extends Controller {
  private $cartModel;

  function __construct() {
    echo " cart constructor ";
    // $this->cartModel = $this->model('Cart');
  }

  function addToCart() {
    echo $_POST['flightid'];
    echo "---";    
    print_r($_SESSION['cart']);
    echo "---";
    array_push($_SESSION['cart'], $_POST['flightid']);
    print_r($_SESSION['cart']);

  }

  function count() {
    return count($_SESSION['cart']);
    // fetch all items from database using $this->itemIds and load into $this->items
  }

  function allItems() {
    // $this->cartModel->allItems;
  }

}


?>

<script>
console.log("lol");
</script>