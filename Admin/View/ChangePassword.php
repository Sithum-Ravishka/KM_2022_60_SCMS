<?php
	$title= "Change Password";
	$js = "../Script/ChangPassVal.js";

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
								<form class="" id="inform" action="../controller/chaPassCheck.php" onsubmit="return validation()" method="post">
			            <fieldset>
			              <legend>CHANGE PASSWORD</legend>
			              <table>
											<tr>
												<td colspan="2">
													<center>
													<div id="error_messege">
													</div>
												</center>
											</tr>
			                <tr>
			                  <td>Current Password:</td>
			                  <td><input type="password" id="cpas" name="cpas" value=""></td>
			                </tr>
			                <tr>
			                  <td>New Password:</td>
			                  <td><input type="password" id="npass" name="npass" value=""></td>
			                </tr>
			                <tr>
			                  <td>Retype New Password:</td>
			                  <td><input type="password" id="rnpass" name="rnpass" value=""></td>
			                </tr>
			              </table>
			              <hr>
			              <input type="submit" name="Change" value="Change"> <br>
			            </fieldset>
			          </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>


		  </div>
	  </div>     
<?php include('footer.php'); ?>

</body>
</html>
