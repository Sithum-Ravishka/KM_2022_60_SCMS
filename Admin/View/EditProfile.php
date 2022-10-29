<?php
	$title= "Edit Profile";
	$js = "../Script/EditProfileVal.js";
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
								<form class="" id="inform" action="../Controller/editadminCheck.php" onsubmit="return validation()" method="post">
								<table>
									<tr>
										<td colspan="2">
											<center>
											<div id="error_messege">
											</div>
										</center>
									</tr>
									<tr>
										<td>ID</td>
										<td>: <input type="text" id="id" name="id" disabled value="<?php echo $viemyinfo['id']; ?>"></td>
									</tr>
									<tr>
										<td>Name</td>
										<td>: <input type="text" id="name" name="name" value="<?php echo $viemyinfo['name']; ?>"></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>: <input type="email" id="email" name="email" value="<?php echo $viemyinfo['email']; ?>"></td>
									</tr>

								</table>
								<hr>
									<input type="submit" name="submit" value="Submit">
								</form>


								</fieldset>
        </td>


			  </div>
	  </div>     
<?php include('footer.php'); ?>

</body>
</html>

