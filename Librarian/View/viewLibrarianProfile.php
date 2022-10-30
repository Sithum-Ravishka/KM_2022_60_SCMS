<?php
$title = "View Librarian Profile";
require_once('../Model/usersmodel.php');
include('headerContent.php');
$librarianid = $_SESSION['librarianid'];
$librarianinfo =  viewLibrarianProfile($librarianid);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Profile</title>
  <style>
    <?php include '../Style/viewLibrarianProfile.css'; ?>
  </style>
</head>

<body>
  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table">
        
        <div id="notice" class="main-content">
        <h2><?php echo $title; ?></h2>
          <table border="1">
            <tr>
              <th>Librarian ID</th>
              <th>Name</th>
              <th>Mail</th>
              <th>Gender</th>
              <th>DOB</th>
              <th>Mobile No.</th>
              <!-- <th>Address</th> -->
              <th>Action</th>
            </tr>
            <tr>
              <td><?php echo $librarianinfo['id']; ?></td>
              <td><?php echo $librarianinfo['name']; ?></td>
              <td><?php echo $librarianinfo['email']; ?></td>
              <td><?php echo $librarianinfo['gender']; ?></td>
              <td><?php echo $librarianinfo['dob']; ?></td>
              <td><?php echo $librarianinfo['mobile']; ?></td>
              <!-- <td><?php echo $librarianinfo['p_address']; ?></td> -->
              <td><a href="changeLibrarianPassword.php">Reset Password</a></td>
            </tr>
          </table>
        </div>
  </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html>