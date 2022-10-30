<?php
	$title= "leaveRequest";
	include_once('../model/leaveRequestModel.php');
	$UsersList = allUserList();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Leave Request List</title>
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
                <?php	include('SidebarLibraryBook.php'); ?>
							</div>

              <div class="dashboard-table">
			
	

              <td>
                <form  class="" action="regCheckCourse.php" method="post">
                  <fieldset >
				  <div style="margin-left: 450px; margin-top:20px;">
                    <legend>Student's leave request list</legend>
				  </div>
										<?php
										echo "<table border = 1 width='170%' cellspacing = 0  >
										<tr align = 'center'>
		                    <td>ID</td>
										    <td>Name</td>
										    <td>Leave From</td>
												<td>Leave To</td>
												<td>Action</td>

										</tr>";
										for($i = 0; $i<count($UsersList); $i++){
										    echo "<tr align = 'center'>
										    <td>{$UsersList[$i]['id']}</td>
										    <td>{$UsersList[$i]['name']}</td>
										    <td>{$UsersList[$i]['leave_from']}</td>
												<td>{$UsersList[$i]['leave_to']}</td>
												<td>{$UsersList[$i]['action']}</td>

										</tr>";
										}
										echo "</table>";
										?>



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
