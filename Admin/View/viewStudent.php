<?php
	$title= "View Sturdnt";
	$js = "../script/StudentSearch.js";
	include_once('../model/studentModel.php');
	$UsersList = allUserList();
?>

				  
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student List</title>
    <style>
		<?php include '../Style/dashboard.css'; ?>
	</style>

	 <!-- Search-->

	 <script src="<?=$javascript?>"></script>
	 <script src="../Script/StudentSearch.js"></script>

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
			  <div style="margin-left: 450px;">
                <center><h2>Student list</h2>
									<input type="text" name="name" id="name" onkeyup="ajax()" />
									<input type="button" name="" value="Search">
								</center>
			  </div>
								<div id="myh1" class="">
									<br>
								<?php
								echo "<table border = 1 width='150%' cellspacing = 0  >
								<tr align = 'center'>
										<td>Id</td>
										<td>Name</td>
										<td>Email</td>
										<td>Mobile</td>
										<td>Gender</td>
										<td>DOB</td>
										<td>Present Address</td>
										<td>Class</td>
										<td>Section</td>
										<td>Roll</td>
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
										<td>{$UsersList[$i]['class']}</td>
										<td>{$UsersList[$i]['section']}</td>
										<td>{$UsersList[$i]['roll']}</td>
										<td> <a href='editStudent.php?id={$UsersList[$i]['id']}'> Edit </a> | <a href='deleteStudent.php?id={$UsersList[$i]['id']}'> Delete </a>  </td>
								</tr>";
								}
								echo "</table>";
								?>
								</div>

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

