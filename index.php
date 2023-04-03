<!-- Routing Part -->
<?php
  $uri = $_SERVER["REQUEST_URI"];
  $uri = rtrim($uri);
  switch($uri) {
    case '/' :
      require 'Controller/login.php';
      break;
    case '/login' :
      require 'Controller/login.php';
      break;
    case '/signin' :
      require 'Controller/login.php';
      break;
    default :
      require 'Controller/login.php';
  }
?>
