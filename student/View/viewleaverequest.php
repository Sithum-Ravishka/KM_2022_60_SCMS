<?php
$title= "View Leave Request";
include_once('../model/DatabaseConnection.php');
$viewmyleave = getleavebyid($_COOKIE['id']);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <style>
		<?php include '../Style/dashboard.css'; ?>
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

        <td>
            <fieldset>
                <legend>View Leave Request</legend>
            <form class="" action="" method="post"> 
               <table>


               <tr>
                <td>Name</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['name']; ?></td>
               </tr>

               <tr>
                <td>ID</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['id']; ?></td>
               </tr>

               <tr>
                <td>Leave From</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['leave_from']; ?></td>
               </tr>

               <tr>
                <td>Leave To</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['leave_to']; ?></td>
               </tr>

               
               <tr>
                <td>Status</td> 
                <td>:</td>
                <td><?php echo $viewmyleave['action']; ?></td>
               </tr>


               </table>
               
            </form>
            </fieldset>
        </td>
      </tr>

          
  </div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>