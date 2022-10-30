<?php
	$title= "view profile";
	include_once('../model/adminModel.php');
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
                <?php	include('Sidebar.php'); ?>
							</div>

              <div class="dashboard-table">
								
              <td>
								<fieldset>
                  <legend>View Profile Information</legend>
										<table>
											<tr>
												<td>ID</td>
												<td>: <?php echo $viemyinfo['id']; ?></td>
											</tr>
											<tr>
												<td>Name</td>
												<td>: <?php echo $viemyinfo['name']; ?></td>
											</tr>
											<tr>
												<td>Email</td>
												<td>: <?php echo $viemyinfo['email']; ?></td>
											</tr>
										</table>
										<hr>
										<br>
										<a href="EditProfile.php">Edit Profile</a>


		              </td>
		            </tr>
		          </table>
						</fieldset>
        </td>


	  </div>

</div>     
<?php include('footer.php'); ?>

</body>
</html>
