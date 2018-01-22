<?php
class Validaiton
{

  private $values; // values = $_POST
  private $rules;
  // $rules format:
  // $rules = [ "name" => "required|min:3|max:3"]

  function __construct()
  {
    // set values to parameter
    // set rules to parameter
  }

  function validate($values, $rules)
  {
    $errors = [];
    $valid = true;

    // loop through rules passed
    foreach ($rules as $keyName => $rule) {
      $splitFullRule = expode("|", $rule); // make numbered array of single rules by splitting value of key  at "|"
      $errors[$keyName] = []; // adding key to $errors array and setting value to empty array

      foreach ($splitFullRule as $singleRule) {
        $splitSingleRule = explode(":", $singleRule); // make numbered array by splitting single rule at ":"
        $ruleName = $splitSingleRule[0]; // will be 'min' from min:3
        $ruleOption = $splitSingleRule[1]; // will be '3' from min:3

        $postValue = $this->values[$keyName]; // will be value of current key from $_POST

        switch ($ruleName) {
          case 'required':
            if (!isset($postValue) || empty($postValue) || strlen($postValue) === 0) {
              $errors[$keyName][] = "$keyName is required"; // appends new element to $errors array
            }
            break;
          case 'email':
            if (!filter_var($postValue, FILTER_VALIDATE_EMAIL)) {
              $errors[$keyName][] = "$keyName must be an email"; // appends new element to $errors array
            }
            break;
          case 'min':
            if (strlen($postValue) < $ruleOption) {
              $errors[$keyName][] = "$keyName must be at least $ruleOption characters"; // appends new element to $errors array
            }
            break;
          case 'max':
            if (strlen($postValue) > $ruleOption) {
              $errors[$keyName][] = "$keyName must be less than $ruleOption characters"; // appends new element to $errors array
            }
            break;
        }
      }

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