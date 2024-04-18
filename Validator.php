<?php

class Validator {

  // Pure method - tāpēc static
  public static function string($data, $min = 0, $max = INF) {
   $data = trim($data);

    return  is_string($data)
            && strlen($data) >= $min
            && strlen($data) <= $max;
  }
  
  public static function number($data, $min = 0, $max = INF) {
    $data = trim($data);
 
     return  is_numeric($data)
             && $data >= $min
             && $data <= $max;
   }

   public static function email($value) {
      return filter_var($value, FILTER_VALIDATE_EMAIL);
   }

   public static function password($value) {
      $minLength = 8;
      $maxLength = 20;


      return preg_match('/[A-Z]/', $value) &&      // Check for uppercase letters
           preg_match('/[a-z]/', $value) &&      // Check for lowercase letters
           preg_match('/[0-9]/', $value) &&      // Check for digits
           preg_match('/[^a-zA-Z0-9]/', $value);  // Check for special characters
   }


}