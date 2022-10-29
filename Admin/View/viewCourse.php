<?php
	$title= "view course";
	include_once('../model/courseModel.php');
	$UsersList = allUserList();
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
                <center><h2>Course list</h2></center>

								<?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>Course ID</td>
								    <td>Course Name</td>
								    <td>Class</td>
								    <td>description</td>
										<td>Action</td>

								</tr>";
								for($i = 0; $i<count($UsersList); $i++){
								    echo "<tr align = 'center'>
								    <td>{$UsersList[$i]['id']}</td>
								    <td>{$UsersList[$i]['course_name']}</td>
								    <td>{$UsersList[$i]['class']}</td>
								    <td>{$UsersList[$i]['description']}</td>
								    <td> <a href='editCourse.php?id={$UsersList[$i]['id']}'> Update </a> | <a href='deleteCourse.php?id={$UsersList[$i]['id']}'> Delete </a>  </td>
								</tr>";
								}
								echo "</table>";
								?>
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

