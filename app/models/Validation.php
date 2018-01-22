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

        $key = $values[$keyName];
        $ruleName = $splitSingleRule[0]; // will be 'min' from min:3
        if (count($splitSingleRule) > 1) {
          $ruleOption = $splitSingleRule[1]; // will be '3' from min:3
        }

        switch ($ruleName) {
          case 'required':
            if (!isset($key) || empty($key) || strlen($key) === 0) {
              $errors[$keyName][] = "$keyName is required"; // appends new element to $errors array
            }
            break;

          case 'email':
            if (!filter_var($key, FILTER_VALIDATE_EMAIL)) {
              $errors[$keyName][] = "$keyName must be in email format";
            }
            break;

          case 'min':
            if (strlen($key) < $ruleOption) {
              $errors[$keyName][] = "$keyName must be at least $ruleOption characters";
            }
            break;

          case 'max':
            if (strlen($key) > $ruleOption) {
              $errors[$keyName][] = "$keyName must be less than $ruleOption characters";
            }
            break;

          case 'matches':
            if ($key !== $values[$ruleOption]) {
              $errors[$keyName][] = "$ruleOption does not match";
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