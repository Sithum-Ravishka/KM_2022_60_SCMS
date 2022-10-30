<?php
$title = "CHANGE PASSWORD";
$javascript = "../Script/passval.js";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change Password</title>
    <style>
		<?php include '../Style/reset.css'; ?>
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
	<form class="" action="../controller/passCheck.php" onsubmit="return val()" method="post">
		<fieldset>
			<legend class="H1">CHANGE PASSWORD</legend>
			<table>
				<tr>
					<td>Current Password:</td>
					<td><input type="password" id="currentpass"  name="cpas" value=""></td>
				</tr>
				<tr>
					<td>New Password:</td>
					<td><input type="password" id="newpass" name="npass" value=""></td>
				</tr>
				<tr>
					<td>Retype New Password:</td>
					<td><input type="password" id="retypepass" name="rnpass" value=""></td>
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
			<hr>
			<input type="submit" name="Change" value="Change"> <br>
		</fieldset>
	</form>
</td>
</tr>
    
</div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>