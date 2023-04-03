<?php
/**
 * Validate form input data.
 * 
 * @method passwordValidation()
 * Validate format of password given by the user.
 */
class Validation {
  
  /**
   * Validate password given by the user
   * 
   * @param string $password
   * Store the password
   * 
   * @return boolean
   * Return TRUE if password is valid otherwise FALSE.
   */
  public function passwordValidation(string $password) {
    
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
