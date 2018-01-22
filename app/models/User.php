<?php
class User
{

  function loginRules()
  {
    $rules = $rules = [
      "email" => "required|email",
      "password" => "required|min:3|max:11"
    ];
    return $rules;
  }

}

?>