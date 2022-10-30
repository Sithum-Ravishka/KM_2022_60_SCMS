<?php
$title = "View Student List";
include('headerContent.php');
include_once('../Model/usersmodel.php');
$studentsinfo = getAllstudentsInfo();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Footer</title>
  <style>
    <?php include '../Style/viewStudentsList.css'; ?>
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

        <br>
        <div id="viewstudentlist">
          <div id="notice">
            <table border="1">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Class</th>
                <th>Section</th>
                <th>Roll</th>
                <th>Present Address</th>
              </tr>
              <?php for ($i = 0; $i < count($studentsinfo); $i++) { ?>
                <tr>
                  <td><?php echo $studentsinfo[$i]['name'] ?></td>
                  <td><?php echo $studentsinfo[$i]['email'] ?></td>
                  <td><?php echo $studentsinfo[$i]['mobile'] ?></td>
                  <td><?php echo $studentsinfo[$i]['gender'] ?></td>
                  <td><?php echo $studentsinfo[$i]['dob'] ?></td>
                  <td><?php echo $studentsinfo[$i]['class'] ?></td>
                  <td><?php echo $studentsinfo[$i]['section'] ?></td>
                  <td><?php echo $studentsinfo[$i]['id'] ?></td>
                  <td><?php echo $studentsinfo[$i]['p_address'] ?></td>
                </tr><?php  } ?>
          </div>
          </table>
        </div>
    </div>
  </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html>