<?php
$title= "Teacher Notice";
require_once('../model/DatabaseConnection.php');
$GetNotice = getAllNotice();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Notice</title>
    <style>
		<?php include '../Style/teachernotices.css'; ?>
	</style>

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
                <h2 class="H1">Teacher Notice</h2>

				<!-- image Code -->
			<div class="logImg">
                <img alt="" src="../images/attention.jpg">
            </div>


								<?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>

								    <th>Notice</th>
								    <th>Time</th>
								    
								</tr>";
								for($i = 0; $i<count($GetNotice); $i++){
								    echo "<tr align = 'center'>
								    <td>{$GetNotice[$i]['notice']}</td>
								    <td>{$GetNotice[$i]['time']}</td>
								    
								    
								</tr>";
								}
								echo "</table>";
								?>


              </td>
            </tr>

				

			
          <!-- End Body Code -->
     
  </div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>