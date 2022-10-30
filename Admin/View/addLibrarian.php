<?php
	$title= "add librarian";
	$js = "../Script/addValidation.js";
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
                <?php	include('SidebarLibrarian.php'); ?>
							</div>

              <div class="dashboard-table">


              <td>
                <form  class="" id="myform" action="../Controller/regCheckLibrarian.php" onsubmit="return validation()" method="post">
                  <fieldset >
                    <legend>REGESTRATION</legend>
                      <table align="center">
												<tr>
													<td colspan="2">
	                          <center>
	                          <div id="error_messege">
	                          </div>
	                        </center>
												</tr>
                        <tr>
                          <td>Name</td>
                          <td>:<input type="text" id="name" name="name" placeholder="Enter Full Name"></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>:<input type="email" id="email" name="email" value=""></td>
                        </tr>
                        <tr>
                          <td>Mobile No</td>
                          <td>:<input type="text" id="mobile" name="mobile" value=""></td>
                        </tr>
                        <tr>
                          <td>Id</td>
                          <td>:<input type="text" id="id" name="id" value=""></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>:<input type="password" id="password" name="password" value=""></td>
                        </tr>
                        <tr>
                          <td>Confirm Password</td>
                          <td>:<input type="password" id="repass" name="repass" value=""></td>
                        </tr>
                        <tr>
                          <td>Gender</td>
                          <td>
                            :<input type="radio" id="gender" name="gender" value="male">Male
                            <input type="radio" id="gender" name="gender" value="female">Female
                            <input type="radio" id="gender" name="gender" value="other">Other
                          </td>
                        </tr>
                        <tr>
                          <td>Date of Birth</td>
                          <td>:<input type="date" id="dob" name="dob" value=""></td>
                        </tr>

                      </table>
                      <hr>
                      <center>
                        <input type="submit" id="submit" name="submit" value="Submit">
                        <input type="reset" id="reset" name="reset" value="Reset">
                    </center>
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