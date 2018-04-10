<?php
require_once APP_ROOT . '/stripe/init.php';

class Charge {

  public function index() {
    $chargeInfo = $this->chargeUser($_POST);
    $_SESSION['cart'] = [];

    $data = [
      'POSTInfo' => $_POST,
      'chargeInfo' => $chargeInfo
    ];
    require_once APP_ROOT . "/views/charge/charge-page.php";
  }

  private function chargeUser($data) {
    \Stripe\Stripe::setApiKey(SECRET_STRIPE_KEY);

    $charge = \Stripe\Charge::create([
      'amount' => 30000, 
      'currency' => 'gbp', 
      'source' => $data['stripeToken']]);

    return $charge;
  }
}

?>

