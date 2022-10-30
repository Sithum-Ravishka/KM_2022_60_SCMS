<?php
	$title= "add student";
	$js = "../Script/addStuValidation.js";
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
                <?php	include('SidebarStudent.php'); ?>
							</div>

              <div class="dashboard-table">

              <td>
                <form  class=""  id="inform" action="../Controller/regCheckStudent.php" onsubmit="return validation()" method="post">
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
                        <tr>
                          <td>Present Address</td>
                          <td>:<input type="text"  id="p_address" name="p_address" value=""></td>
                        </tr>
                        <tr>
                          <td>Class</td>
                          <td>:<select id="classE" name="class">
                              <option value="Six">Six</option>
                              <option value="Seven">Seven</option>
                              <option value="Eight">Eight</option>
                              <option value="Nine">Nine</option>
                              <option value="Ten">Ten</option>
                            </select>
                          </td>
                        </tr>

                        <tr >
                          <td>Section</td>
                          <td>:<select id="section" name="section">
                              <option value="A">A</option>
                              <option value="B">B</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>Roll No</td>
                          <td>:<input type="text" id="roll" name="roll" value=""></td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
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

 