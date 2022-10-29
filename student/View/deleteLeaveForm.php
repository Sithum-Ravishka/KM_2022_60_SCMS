<?php
  include_once('../model/leaveRequestModel.php');
  $id = $_GET['id'];
  $deletemyinfo = deleteUserbyid($id);
  header('location: ../view/viewleaverequest1.php');
?>
