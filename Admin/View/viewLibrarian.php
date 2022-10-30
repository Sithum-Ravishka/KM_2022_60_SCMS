<?php
	$title= "View Librarian";
	$js = "../script/LibrarianSearch.js";
	include_once('../model/librarianModel.php');
	$UsersList = allUserList();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <style>
		<?php include '../Style/viewLibrarian.css'; ?>
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
                <center><h2>Librarian list</h2>
									<input type="text" name="name" id="name" onkeyup="ajax()" />
									<input type="button" name="" value="Search">
								</center>
								<br>
								<div id="myh1" class="">
								<?php
								echo "<table border = 1 width='auto' cellspacing = 0  >
								<tr align = 'center'>
										<th >Id</th>
										<th>Name</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Gender</th>
										<th>DOB</th>
										<th>Action</th>
								</tr>";
								for($i = 0; $i<count($UsersList); $i++){
										echo "<tr align = 'center'>
										<td>{$UsersList[$i]['id']}</td>
										<td>{$UsersList[$i]['name']}</td>
										<td>{$UsersList[$i]['email']}</td>
										<td>{$UsersList[$i]['mobile']}</td>
										<td>{$UsersList[$i]['gender']}</td>
										<td>{$UsersList[$i]['dob']}</td>
										<td> <a href='editLibrarian.php?id={$UsersList[$i]['id']}'> Edit </a> | <a href='deleteLibrarian.php?id={$UsersList[$i]['id']}'> Delete </a>  </td>
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