<?php
  include_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
  $deletemyinfo = deleteleaveById($Id);
  header('location: ../View/deleteleaverequest.php');
?>