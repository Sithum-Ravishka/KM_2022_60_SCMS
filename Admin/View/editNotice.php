<?php
$title = "Update Notice";
$js = "../Script/noticeVal.js";
include_once('../model/noticeModel.php');
$id = $_GET['id'];
$updatemyinfo = getUserbyid($id);
$_SESSION['id'] = $id;
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Notice Update</title>
  <style>
    <?php include '../Style/addTeacher.css'; ?>
  </style>

  <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- fontawesome css -->
</head>

<body>
  <?php include('headerContent.php'); ?>

  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('SidebarNotice.php'); ?>
    </div>

    <div class="dashboard-table">
    <div class="form-body">
      <td>
        <form id="inform" action="../controller/updateCheckNotice.php" onsubmit="return validation()" method="post">

          <fieldset>
            <legend>Notice</legend>
            <table align="center">
              <tr>
                <td colspan="2">
                  <center>
                    <div id="error_messege">
                    </div>
                  </center>
              </tr>
              <tr>
                <td>
                  <textarea id="notice" name="notice" rows="10" cols="50" placeholder="Enter notice Here"><?php echo $updatemyinfo['notice']; ?></textarea>
                </td>
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
      <div class="regImg">
        <img alt="" src="../Resources/Register-home.png">
      </div>

    </div>
  </div>
  <?php include('footer.php'); ?>

</body>

</html>