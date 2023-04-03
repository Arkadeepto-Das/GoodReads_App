<?php
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST)) {
    require 'Classes/SendQuery.php';
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
          $realname = $query->realName($userName)->fetch_assoc();
          $_SESSION["firstName"] = $realname["Firstname"];
          $_SESSION["lastName"] = $realname["Lastname"];
          require 'reader_page.php';  
        }
        else {
          require 'admin_page.php';
        }
      }
      else {
        $GLOBALS["passwordErr"] = "Incorrect password";
        require 'index.php';
      }
    }
    else {
      $GLOBALS["userNameErr"] = "Username doesn't exist";
      require 'index.php';
    }
  }
?>
