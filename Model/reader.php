<!-- Model part of the reader page -->
<?php
  if(!isset($_SESSION)) {
    session_start();
  }
  $query = new SendQuery();
  $realname = $query->realName($_SESSION["userName"])->fetch_assoc();
  $_SESSION["end"] = 8;
  $_SESSION["firstName"] = $realname["Firstname"];
  $_SESSION["lastName"] = $realname["Lastname"];
  $_SESSION["readerDetails"] = $query->readerDetails($_SESSION["userName"]);
  require 'View/reader_page.php';
?>
