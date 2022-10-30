<?php
$title= "Course Details";
$javascript = "../Script/courseSearch.js";
require_once('../Model/DatabaseConnection.php');
$courseList=getAllcourse();
?>
 
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <style>
		<?php include '../Style/dashboard.css'; ?>
	</style>

   <!-- Search-->
   
   <script src="<?=$javascript?>"></script>

     <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- fontawesome css -->
  </head>
  <body>
<?php	include('headerContent.php'); ?>

<div class="dashboard-content">
							<div class="dashboard-sidebar">
                <?php	include('sideBar.php'); ?>
							</div>

              <div class="dashboard-table">

             <!-- Start Body code -->

        <td>
            <center><h2>Course Details</h2></center>
            <center>
                  <b>Find Course Info:</b><input type="text" onkeyup="ajax()" name="name" id="name">
                  <input type="button" name="" value="Find">
                </center>
          <div id="myh1" class="">
                  <br>
            <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <td>ID</td>
                    <td>Course Name</td>
                    <td>Class</td>
                    <td>Description</td>
                </tr>";
                for($i = 0; $i<count($courseList); $i++){
                    echo "<tr align = 'center'>
                    <td>{$courseList[$i]['id']}</td>
                    <td>{$courseList[$i]['course_name']}</td>
                    <td>{$courseList[$i]['class']}</td>
                    <td>{$courseList[$i]['description']}</td>
                </tr>";
                }
                echo "</table>";
                ?>
                </div>
        </td>
      </tr>

       <!-- End Body code -->
    
       </div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>