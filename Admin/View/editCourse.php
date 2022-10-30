<?php
$title = "Update course";
$js = "../Script/addCourseVal.js";
include_once('../model/courseModel.php');
$id = $_GET['id'];
$updatemyinfo = getUserbyid($id);
$_SESSION['id'] = $id;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Course Update</title>
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
      <?php include('SidebarCourse.php'); ?>
    </div>

    <div class="dashboard-table">

    <div class="form-body">
      <td>
        <form id="inform" action="../controller/updateCheckCourse.php" onsubmit="return validation()" method="post">

          <fieldset>
            <legend>Update Course</legend>
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
                <td>:<input type="text" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>"></td>
              </tr>
              <tr>
                <td>Course Name</td>
                <td>:<input type="text" id="name" name="name" value="<?php echo $updatemyinfo['course_name']; ?>"></td>
              </tr>
              <tr>
                <td>Class</td>
                <td>:<select id="classE" name="class">
                    <option <?php if ($updatemyinfo['class'] == "Six") { ?> selected="true" <?php } ?> value="Six">Six</option>
                    <option <?php if ($updatemyinfo['class'] == "Seven") { ?> selected="true" <?php } ?> value="Seven">Seven</option>
                    <option <?php if ($updatemyinfo['class'] == "Eight") { ?> selected="true" <?php } ?> value="Eight">Eight</option>
                    <option <?php if ($updatemyinfo['class'] == "Nine") { ?> selected="true" <?php } ?> value="Nine">Nine</option>
                    <option <?php if ($updatemyinfo['class'] == "Ten") { ?> selected="true" <?php } ?> value="Ten">Ten</option>
                  </select>
                </td>
              <tr>
                <td>Description</td>
                <td><textarea id="description" name="description" rows="3" cols="20"><?php echo $updatemyinfo['description']; ?></textarea></td>
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
        <img alt="" src="../Resources/course1.jpg">
      </div>


    </div>
  </div>
  <?php include('footer.php'); ?>

</body>

</html>