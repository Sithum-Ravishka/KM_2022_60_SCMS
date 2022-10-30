<?php
$title= "Request for leave";
$javascript = "../Script/leaveval.js";
include_once('../model/DatabaseConnection.php');
$viemyinfo = getUserbyid($_COOKIE['id']);
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
                <legend>Request for leave </legend>
            <form class="" action="../Controller/leaveCheck.php" onsubmit="return val()" method="post">
               <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id" value="<?php echo $viemyinfo['id']; ?>"> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $viemyinfo['name']; ?>"> </td>
                </tr>
                <tr>
                    <td>Leave From</td>
                    <td><input type="date" id="leave_from" name="leave_from" value=""> </td>
                </tr>
                <tr>
                    <td>Leave To</td>
                    <td><input type="date" id="leave_to" name="leave_to" value=""> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit"> 
                        <a href="viewleaverequest.php">View Leave Request</a>
                    </td>

                    
                </tr>

                <tr>
					<td colspan="2">
						<center>
							<div id="error_messege">
							</div>
						</center>
					</td>
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