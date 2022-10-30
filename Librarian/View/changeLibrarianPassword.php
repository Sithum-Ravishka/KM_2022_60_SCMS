<?php $title= "Reset Password";
include('headerContent.php');
   ?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Change Password</title>
  <style>
    <?php include '../Style/dashboard.css'; ?>
  </style>
</head>

<body>
  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table"> 
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
        <div id="chngpass">
        <form action="../Controller/changeLibrarianPassCheck.php" method="POST">
          <table align="center">
          <tr>
            <td>Current Password:</td>
            <td><input type="password" name="password" value=""></td>
          </tr>

          <tr>
            <td></td>
          </tr>

          <tr>
            <td>New Password:</td>
            <td><input type="password" name="newpassword" value=""></td>
          </tr>

          <tr>
            <td></td>
          </tr>

          <tr>
            <td>Retype New Password:</td>
            <td><input type="password" name="repassword" value=""></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="changepassword" value="Change Password" id="commonbttnforall"></td>
          </tr>
         </table>
         </form>
         </div>
        </td>
      </tr>

      </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html>  