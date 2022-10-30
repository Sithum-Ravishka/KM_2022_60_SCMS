<?php
	$title= "View Sturdnt";
	include_once('../model/studentModel.php');
	$UsersList = alleditUserList();
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
                <center><h2>Student Information edit request list</h2></center>
								<?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
										<td>Id</td>
										<td>Name</td>
										<td>Email</td>
										<td>Mobile</td>
										<td>Gender</td>
										<td>DOB</td>
										<td>Present Address</td>
										<td>Action</td>
								</tr>";
								for($i = 0; $i<count($UsersList); $i++){
										echo "<tr align = 'center'>
										<td>{$UsersList[$i]['id']}</td>
										<td>{$UsersList[$i]['name']}</td>
										<td>{$UsersList[$i]['email']}</td>
										<td>{$UsersList[$i]['mobile']}</td>
										<td>{$UsersList[$i]['gender']}</td>
										<td>{$UsersList[$i]['dob']}</td>
                    <td>{$UsersList[$i]['p_address']}</td>
										<td> <a href='editrequestStudent.php?id={$UsersList[$i]['id']}'> view </a>  </td>
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
