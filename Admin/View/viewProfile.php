<?php
$title = "view profile";
include_once('../model/adminModel.php');
$viemyinfo = getUserbyid($_COOKIE['id']);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<style>
		<?php include '../Style/viewProfile.css'; ?>
	</style>

	<!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- fontawesome css -->
</head>

<body>
	<?php include('headerContent.php'); ?>

	<div class="dashboard-content">
		<div class="dashboard-sidebar">
			<?php include('Sidebar.php'); ?>
		</div>

		<div class="dashboard-table">

			<div class="profile-content">
				<div class="profile-information">
					<span class="profile-title">View Profile Information</span>
					<table style="margin-top: 30px;">
						<tr>
							<td style="font-weight: 700;">ID</td>
							<td>: <?php echo $viemyinfo['id']; ?></td>
						</tr>
						<tr>
							<td style="font-weight: 700;">Name</td>
							<td>: <?php echo $viemyinfo['name']; ?></td>
						</tr>
						<tr>
							<td style="font-weight: 700;">Email</td>
							<td>: <?php echo $viemyinfo['email']; ?></td>
						</tr>
					</table>
					<hr>
					<br>
					<div class="profile-edit">
						<button><a href="EditProfile.php" style="text-decoration: none; color:white;">Edit Profile</a></button>
					</div>

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