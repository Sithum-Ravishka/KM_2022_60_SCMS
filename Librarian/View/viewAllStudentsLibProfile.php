<?php 
$title= "Library Registered Students Profile";
include('headerContent.php');
include_once('../Model/usersmodel.php');
$viewAllStudentsLibProfile = ViewAllStudentsLibInfo();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Library Registered Students Profile</title>
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
    <div id="myh1" class="">
    <div id="notice">
    <table border="1">
    <tr>
            <th>Serial No.</th>
            <th>Student Id</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php  for($i=0; $i < count($viewAllStudentsLibProfile); $i++){ ?>
         <tr>
             <td><?php echo $viewAllStudentsLibProfile[$i]['serialno'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['id'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['name'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['mail'] ?></td>
             <td><?php echo $viewAllStudentsLibProfile[$i]['gender'] ?></td>
             <td>
                  <a href="editstudentlibprofile.php?id=<?php echo $viewAllStudentsLibProfile[$i]['id']; ?>">UPDATE</a> |
                  <a href="deletestudentlibprofile.php?id=<?php echo $viewAllStudentsLibProfile[$i]['id']; ?>">DELETE</a> 
                  
             </td>
         </tr>
         <?php  } ?></div>
             </table>
             </div>
             </div>

             </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html> 
 