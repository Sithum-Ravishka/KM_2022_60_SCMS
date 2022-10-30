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
    <title>Profile Update</title>
    <style>
		<?php include '../Style/viewProfile.css'; ?>
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
 
			  <div class="profile-content">
				<div class="profile-information">
					<span class="profile-title">View Profile Information</span>

								<form class="" id="inform" action="../Controller/editadminCheck.php" onsubmit="return validation()" method="post">
								<table >
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
								<div class="profile-edit-edit">
									<input type="submit" name="submit" value="Submit">
								</div>
								</form>


	
								</div>

<div class="logImg">
	<img alt="" src="../Resources/profile.jpg">
</div>
</div>

			  </div>
	  </div>     
<?php include('footer.php'); ?>

</body>
</html>

