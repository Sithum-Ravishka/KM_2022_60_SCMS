<?php 
$title= "View Book Info";
include('headerContent.php');
require_once('../Model/usersmodel.php');
$serialno = $_GET['serialno'];
$bookinfo =  viewBookInfo($serialno);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Book Info</title>
  <style>
    <?php include '../Style/viewBookInfo.css'; ?>
  </style>
</head>

<body>
  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table">
    <div class="title">
        <h2><?php echo $title; ?></h2>
    </div>
        <div id="notice">
    <table border="1">
    <tr>
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Categories</th>
            <th>Book Copies</th>

        </tr>
        <tr>
            <td><?php echo $bookinfo['isbn']; ?></td>
            <td><?php echo $bookinfo['title']; ?></td>
            <td><?php echo $bookinfo['author']; ?></td>
            <td><?php echo $bookinfo['edition']; ?></td>
            <td><?php echo $bookinfo['categories']; ?></td>
            <td><?php echo $bookinfo['bookcopy']; ?></td>

        </tr>
      </table>
          </div>
        </div>  

        </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html> 
 