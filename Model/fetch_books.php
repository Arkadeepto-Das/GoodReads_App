<?php
  if(!isset($_SESSION)) {
    session_start();
  }
  require 'Model/SendQuery.php';
  $query = new SendQuery();
  $bookDetails = $query->bookList(0, $_SESSION["end"]);
  $_SESSION["end"] = $_SESSION["end"] + 9;
  $row = $bookDetails->fetch_assoc();
?>
