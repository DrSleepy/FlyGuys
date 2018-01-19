<?php 

class Carts extends Controller
{
  private $cartModel;

  function __construct()
  {
    // $this->cartModel = $this->model('Cart');
  }

  function addToCart()
  {
    // echo $_POST['username'];
    // print_r($_SESSION['cart']);
    // array_push($_SESSION['cart'], "HA");
    // print_r($_SESSION['cart']);

  }

  function count()
  {
    return count($_SESSION['cart']);
    // fetch all items from database using $this->itemIds and load into $this->items
  }

  function allItems()
  {
    // $this->cartModel->allItems;
  }

}


?>

<script>
console.log("lol");
</script>