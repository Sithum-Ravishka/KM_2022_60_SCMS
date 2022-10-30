<?php
	$title= "Add course";
	$js = "../Script/addCourseVal.js";
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
                <?php	include('SidebarCourse.php'); ?>
							</div>

              <div class="dashboard-table">
								
              <td>
                <form id="inform" class="" action="../Controller/addCheckCourse.php" onsubmit="return validation()" method="post">
                  <fieldset >
                    <legend>Create Course</legend>
                      <table align="center">
												<tr>
													<td colspan="2">
														<center>
														<div id="error_messege">
														</div>
													</center>
												</tr>
                        <tr>
                          <td>Course Name</td>
                          <td>:<input type="text" id="name" name="name" placeholder=""></td>
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
                        <tr>
                          <td>Description</td>
                          <td><textarea name="description" id="description" rows="3" cols="20"></textarea></td>
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

