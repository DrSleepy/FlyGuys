<?php
class UserService
{

  function loginUser()
  {
    // log user in
    echo "user serviceeee";
  }

  function logoutUser()
  {
    // log user out
  }





  function loginRules()
  {
    return $rules = [
      "email" => "required|email",
      "password" => "required"
    ];
  }

  function registerRules()
  {
    return $rules = [
      "email" => "required|email",
      "email_confirm" => "required|matches:email",
      "password" => "required|min:8|max:30",
      "password_confirm" => "required|matches:password"
    ];
  }

  function checkoutRules()
  {
    return $rules = [
      "first_name" => "required|alphabetical",
      "last_name" => "required|alphabetical",
      "email" => "required|email",
      "home_number" => "required|numerical|telephone",
      "mobile_number" => "required|numerical|telephone",
      "address" => "required",
      "town_city" => "required|alphabetical",
      "postcode" => "required|postcode",
      "country" => "required|alphabetical"
    ];
  }

}

?>