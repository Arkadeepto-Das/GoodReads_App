<?php
class Validation {
  
  public function passwordValidation($password) {
    // Password format validation.
    if(preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=!\?]{8,20}$/",
    $password) == 1) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
}
?>
