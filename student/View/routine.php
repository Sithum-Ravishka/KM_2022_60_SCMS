<?php
$title= "Routine";
require_once('../Model/DatabaseConnection.php');
$routine=getAllroutine();
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
            <legend>Class Routine</legend>
        <form class="" action="" method="post">
        <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <td>Day</td>
                    <td>10:00-11:00</td>
                    <td>11:00-12:00</td>
                    <td>12:00-01:00</td>
                    <td>01:00-02:00</td>
                    <td>02:00-03:00</td>
					<td>03:00-04:00</td>
                </tr>";
                for($i = 0; $i<count($routine); $i++){
                    echo "<tr align = 'center'>
                    <td>{$routine[$i]['day']}</td>
                    <td>{$routine[$i]['10:00-11:00']}</td>
                    <td>{$routine[$i]['11:00-12:00']}</td>
                    <td>{$routine[$i]['12:00-01:00']}</td>
                    <td>{$routine[$i]['01:00-02:00']}</td>
                    <td>{$routine[$i]['02:00-03:00']}</td>
					<td>{$routine[$i]['03:00-04:00']}</td>
                    
                </tr>";
                }
                echo "</table>";
                ?>

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