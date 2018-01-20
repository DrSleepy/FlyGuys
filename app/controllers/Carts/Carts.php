<?php 

class Carts extends Controller
{
  private $cartModel;

  function __construct()
  {
    // $this->view('Home/Home-page', "data");
  }


  function addToCart()
  {
    print_r($_POST);    
    // echo $_POST['flightid'];
    // echo "---";
    // print_r($_SESSION['cart']);
    // echo "---";
    // array_push($_SESSION['cart'], $_POST['flightid']);
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