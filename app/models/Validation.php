<?php
class Validation
{


  function validate($values, $rules)
  {
    // values format: assoc array
    // $rules format:
    // $rules = [ "name" => "required|min:3|max:3"]

    $errors = [];
    $valid = true;

    // loop through rules passed
    foreach ($rules as $keyName => $rule) {
      $splitFullRule = explode("|", $rule); // make numbered array of single rules by splitting value of key  at "|"
      $errors[$keyName] = []; // adding key to $errors array and setting value to empty array

      foreach ($splitFullRule as $singleRule) {
        $splitSingleRule = explode(":", $singleRule);// make numbered array by splitting single rule at ":"

        switch ($splitSingleRule[0]) {
          case 'required':
            if (!isset($values[$keyName]) || empty($values[$keyName]) || strlen($values[$keyName]) === 0) {
              $errors[$keyName][] = "$keyName is required"; // appends new element to $errors array
            }
            break;

          case 'email':
            if (!filter_var($values[$keyName], FILTER_VALIDATE_EMAIL)) {
              $errors[$keyName][] = "$keyName must be an email"; // appends new element to $errors array
            }
            break;

          case 'min':
            if (strlen($values[$keyName]) < $splitSingleRule[1]) {
              $errors[$keyName][] = "$keyName must be at least $splitSingleRule[1] characters"; // appends new element to $errors array
            }
            break;

          case 'max':
            if (strlen($values[$keyName]) > $splitSingleRule[1]) {
              $errors[$keyName][] = "$keyName must be less than $splitSingleRule[1] characters"; // appends new element to $errors array
            }
            break;
        }
      }

      // Check if any errors exist
      foreach ($errors as $key => $value) {
        if (count($value) > 0) {
          $valid = false;
        }
      }

    }

    return [$valid, $errors];
  }



}

?>