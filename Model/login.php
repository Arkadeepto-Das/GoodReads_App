<!-- Model part of login page -->
<?php
  session_start();
  require 'Model/SendQuery.php';
  require 'Classes/Validation.php';
  $query = new SendQuery();
  $validate = new Validation();
  $userName = $_POST["userName"];
  $password = $_POST["password"];
  $userData = $query->select($userName);
  $details = $userData->fetch_assoc();

  if(isset($userData) && $details["Username"] == $userName) {
    if($details["Password"] == $password) {
      $_SESSION["userName"] = $userName;

      if($details["Role"] == "reader") {
        require 'Model/reader.php';  
      }
      else {
        require 'Model/admin.php';
      }
    }
    else {
      $GLOBALS["passwordErr"] = "Incorrect password";
      require 'View/login_page.php';
    }
  }
  else {
    $GLOBALS["userNameErr"] = "Username doesn't exist";
    require 'View/login_page.php';
  }
?>
