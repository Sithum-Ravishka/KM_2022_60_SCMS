<?php
$title = "Edit student request";
$js = "../Script/editReqValidation.js";
include_once('../model/studentModel.php');
$id = $_GET['id'];
$updatemyinfo = getRequestUserbyid($id);
$_SESSION['id'] = $id;
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Request Student Profile</title>
  <style>
    <?php include '../Style/dashboard.css'; ?>
  </style>

  <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- fontawesome css -->
</head>

<body>
  <?php include('headerContent.php'); ?>

  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('SidebarStudent.php'); ?>
    </div>

    <div class="dashboard-table">

      <td>
        <form id="inform" action="../controller/editRequestCheckStudent.php" onsubmit="return validation()" method="post">

          <fieldset>
            <legend>Edit student request</legend>
            <table align="center">
              <tr>
                <td colspan="2">
                  <center>
                    <div id="error_messege">
                    </div>
                  </center>
              </tr>
              <tr>
                <td>Id</td>
                <td>:<input type="text" id="id" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>"></td>
              </tr>
              <tr>
                <td>Name</td>
                <td>:<input type="text" id="name" name="name" value="<?php echo $updatemyinfo['name']; ?>" placeholder="Enter Full Name"></td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:<input type="email" id="email" name="email" value="<?php echo $updatemyinfo['email']; ?>"></td>
              </tr>
              <tr>
                <td>Mobile No</td>
                <td>:<input type="number" id="text" name="mobile" value="<?php echo $updatemyinfo['mobile']; ?>"></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>
                  :<input type="radio" id="gender" name="gender" <?php if ($updatemyinfo['gender'] == "male") { ?> checked="true" <?php } ?> value="male">Male
                  <input type="radio" id="gender" name="gender" <?php if ($updatemyinfo['gender'] == "female") { ?> checked="true" <?php } ?> value="female">Female
                  <input type="radio" id="gender" name="gender" <?php if ($updatemyinfo['gender'] == "other") { ?> checked="true" <?php } ?> value="other">Other
                </td>
              </tr>
              <tr>
                <td>Date of Birth</td>
                <td>:<input type="date" id="dob" name="dob" value="<?php echo $updatemyinfo['dob']; ?>"></td>
              </tr>
              <tr>
                <td>Present Address</td>
                <td>:<input type="text" id="p_address" name="p_address" value="<?php echo $updatemyinfo['p_address']; ?>"></td>
              </tr>
            </table>
            <hr>
            <center>
              <input type="submit" name="update" value="Update">

            </center>
          </fieldset>







      </td>
      </tr>
      </table>
      </td>
      </tr>
    </div>
  </div>
  <?php include('footer.php'); ?>

</body>

</html>