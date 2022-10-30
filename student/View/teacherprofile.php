<?php
$title= "Teacher Profile";
$javascript = "../Script/teacherSearch.js";
require_once('../Model/DatabaseConnection.php');
$teacherList=getAllteacher();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Profile</title>
    <style>
		<?php include '../Style/teacherProfile1.css'; ?>
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

              <!-- Start Body Code -->
        <td>
          <fieldset>
            <legend class="H1">Teacher Profile</legend> 
            <div class="send">
                  <b class="scr">Find Teacher:</b><input type="text" onkeyup="ajax()" name="name" id="name">
                  <div class="sch"><input type="button" name="" value="Find"></div>
            </div>
          <div id="myh1" class="">
                  <br>
        <form class="" action="" method="post">
        <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                </tr>";
                for($i = 0; $i<count($teacherList); $i++){
                    echo "<tr align = 'center'>
                    <td>{$teacherList[$i]['id']}</td>
                    <td>{$teacherList[$i]['name']}</td>
                    <td>{$teacherList[$i]['email']}</td>
                    <td>{$teacherList[$i]['mobile']}</td>
                    <td>{$teacherList[$i]['gender']}</td>
                    <td>{$teacherList[$i]['dob']}</td>
                    
                </tr>";
                }
                echo "</table>";
                ?>
                </div>

        </form>
        </fieldset>
        </td>
      </tr>

     <!-- End Body Code -->

  </div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>