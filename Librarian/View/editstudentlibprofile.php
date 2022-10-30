<?php  
$title= "Edit Student Librarian Profile";
include('headerContent.php');
require_once('../Model/usersmodel.php');
$roll = $_GET['id'];
$editLibProfile =  viewStudentLibProfile($roll);
$_SESSION['roll'] = $roll;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Student Profile</title>
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
        <form action="../Controller/editStudentLibProfileCheck.php" method="POST">
          <table align="center">
                    <tr>
                        <td>Roll :</td>
                        <td><input type="roll" name="roll" disabled value="<?php echo $editLibProfile['id']; ?>" ></td>
                    </tr>
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" name="name" value="<?php echo $editLibProfile['name']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Mail :</td>
                        <td><input type="mail" name="mail" value="<?php echo $editLibProfile['mail']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
                        <td><input type="text" name="gender" disabled value="<?php echo $editLibProfile['gender']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="editstudentlibprofile" value="Update Profile"></td>
                    </tr>
            </table>
          </form>
        </td>
      </tr>

      </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html>  