<?php
class Validation
{
  private $values; // format: assoc array
  private $rules; // $rules format: [ "name" => "required|min:3|max:3"]
  private $errors = [];
  private $valid = true;

  // values to be looped through
  private $splitFullRule; // equals array from "required|min:3|max:3" split at "|"
  private $ruleName; // equals (currently looped) key from $rules;
  private $ruleValue; // equals $values[$ruleName]
  private $subRuleName; // equals "min" from "min:3"
  private $subRuleOption; // equals "3" from "min:3"


  // takes in array of data ($value) and rules to compare the data against
  // returns if data is valid or not with errors where failed
  function validate($values, $rules) : array
  {
    $this->values = $values;
    $this->rules = $rules;

    // loops through each value (string) in $values array
    foreach ($rules as $ruleName => $rule) {
      $this->ruleName = $ruleName;

      $this->splitFullRule = explode("|", $rule); // make array of sub rules by splitting value of key  at "|"
      $this->errors[$ruleName] = []; // adding key to $errors array and setting value to empty array

      $this->subRuleSplitter();
      $this->errorChecking();
    }

    return [
      $this->valid,
      $this->errors
    ];
  }


  function subRuleSplitter()
  {
    // loop through each sub rule (string) 
    foreach ($this->splitFullRule as $singleRule) {
      $subRule = explode(":", $singleRule);// make array from sub rules by splitting single rule at ":"

      // setting $ruleValue to value of rule (from origin data aray) currently being looped
      $this->ruleValue = $this->values[$this->ruleName];
      $this->subRuleName = $subRule[0]; // equals 'min' from min:3

      if (count($subRule) > 1) { // if $subRule has ":", count wil be over 1
        $this->subRuleOption = $subRule[1]; // equals '3' from min:3
      }

      $this->subRuleCriteria();
    }
  }


  // runes each sub rule name against its own set rules
  function subRuleCriteria()
  {
    switch ($this->subRuleName) {
      case 'required':
        if (!isset($this->ruleValue) || empty($this->ruleValue) || strlen($this->ruleValue) === 0) {
          $this->errors[$this->ruleName][] = "field is required"; // appends new element to $errors array
        }
        break;

      case 'email':
        if (!filter_var($this->ruleValue, FILTER_VALIDATE_EMAIL)) {
          $this->errors[$this->ruleName][] = "$this->ruleName must be in email format";
        }
        break;

      case 'min':
        if (strlen($this->ruleValue) < $this->subRuleOption) {
          $this->errors[$this->ruleName][] = "$this->ruleName must be at least $this->subRuleOption characters";
        }
        break;

      case 'max':
        if (strlen($this->ruleValue) > $this->subRuleOption) {
          $this->errors[$this->ruleName][] = "$this->ruleName must be less than $this->subRuleOption characters";
        }
        break;

      case 'matches':
        if ($this->ruleValue !== $this->values[$this->subRuleOption]) {
          $this->errors[$this->ruleName][] = "$this->subRuleOption does not match";
        }
        break;

      case 'alphabetical':
        if (!preg_match("/^[a-zA-Z]+$/", str_replace(' ', '', $this->ruleValue))) {
          $this->errors[$this->ruleName][] = "alphabetical characters only";
        }
        break;

      case 'numerical':
        if (!preg_match("/^[0-9]+$/", str_replace(' ', '', $this->ruleValue))) {
          $this->errors[$this->ruleName][] = "numerical characters only";
        }
        break;

      case 'postcode':
        $postcodePattern = '/^([Gg][Ii][Rr] 0[Aa]{2})|((([A-Za-z][0-9]{1,2})|(([A-Za-z][A-Ha-hJ-Yj-y][0-9]{1,2})|(([AZa-z][0-9][A-Za-z])|([A-Za-z][A-Ha-hJ-Yj-y][0-9]?[A-Za-z]))))[0-9][A-Za-z]{2})$/';
        if (!preg_match($postcodePattern, str_replace(' ', '', $this->ruleValue))) {
          $this->errors[$this->ruleName][] = "invalid postcode";
        }
        break;

      case 'telephone':
        if (strlen($this->ruleValue) !== 11) {
          $this->errors[$this->ruleName][] = "invalid number";
        }
        break;
    }
  }


  // loops through $errors array counting each value
  // if count is greater than 0 (any errors exist), data is not valid  
  function errorChecking()
  {
    foreach ($this->errors as $key => $value) {
      if (count($value) > 0) {
        $this->valid = false;
      }
    }
  }

}

?>