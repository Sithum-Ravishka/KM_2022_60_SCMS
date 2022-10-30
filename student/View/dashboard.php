<?php
$title= "Dashboard";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>
    <style>
		<?php include '../Style/dashbordWelcom.css'; ?>
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

              <!-- image Code -->
            <div class="logImg">
                <img alt="" src="../images/st wel.jpg">
            </div>

            <!-- image Code -->
            <div class="logImg1">
                <img alt="" src="../images/SCL.jpg">
            </div>


<!-- End Body Code -->

  </div>

      </div>     
<?php include('footer1.php'); ?>

</body>
</html>
