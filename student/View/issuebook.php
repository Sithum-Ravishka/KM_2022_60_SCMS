<?php
$title= "Issue Book History";
include_once('../model/DatabaseConnection.php');
$viewhistory = getissuedbook($_COOKIE['id']);
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
                <?php	include('sideBar.php'); ?>
							</div>

              <div class="dashboard-table">

              <!-- Start Body Code -->

<td>
            <fieldset>
                <legend>Issue Book History</legend>
            <form class="" action="" method="post"> 
               <table>

               <tr>
                <td>ID</td> 
                <td>:</td>
                <td><?php echo $viewhistory['id']; ?></td>
               </tr>

               <tr>
                <td>Book Name</td> 
                <td>:</td>
                <td><?php echo $viewhistory['title']; ?></td>
               </tr>

               <tr>
                <td>Issue Date</td> 
                <td>:</td>
                <td><?php echo $viewhistory['issuesdate']; ?></td>
               </tr>
               <tr>
                <td>Return Date</td> 
                <td>:</td>
                <td><?php echo $viewhistory['returndate']; ?></td>
               </tr>
               <tr>
                <td>Fine</td> 
                <td>:</td>
                <td><?php echo $viewhistory['fine']; ?></td>
               </tr>

               </table>
               
            </form>
            </fieldset>
        </td>
      </tr>

      <!-- End Body Code -->

  </div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>