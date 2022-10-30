<?php
$title = "Library Book";
$js = "../script/BookSearch.js";
include_once('../model/bookModel.php');
$UsersList = allUserList();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Library Book List</title>
	<style>
		<?php include '../Style/dashboard.css'; ?>
	</style>
	<script src="<?= $javascript ?>"></script>
	<script src="../Script/BookSearch.js"></script>

	<!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- fontawesome css -->
</head>

<body>
	<?php include('headerContent.php'); ?>

	<div class="dashboard-content">
		<div class="dashboard-sidebar">
			<?php include('SidebarLibraryBook.php'); ?>
		</div>

		<div class="dashboard-table">

			<td>
				<center>
					<h2>Library Book list</h2>
					<input type="text" name="name" id="name" onkeyup="ajax()" />
					<input type="button" name="" value="Search">
					<!-- <div id="result">

								</div> -->
				</center>
				<br>
				<div id="myh1" class="">
					<?php
					echo "<table  border = 1 width='110%' cellspacing = 0  >
									<tr align = 'center'>
											<td>ISBN</td>
											<td>Title</td>
											<td>Author</td>
											<td>Edition</td>
											<td>Categories</td>
											<td>Book Copy</td>
									</tr>";
					for ($i = 0; $i < count($UsersList); $i++) {
						echo "<tr align = 'center'>
											<td>{$UsersList[$i]['isbn']}</td>
											<td>{$UsersList[$i]['title']}</td>
											<td>{$UsersList[$i]['author']}</td>
											<td>{$UsersList[$i]['edition']}</td>
											<td>{$UsersList[$i]['categories']}</td>
											<td>{$UsersList[$i]['bookcopy']}</td>
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