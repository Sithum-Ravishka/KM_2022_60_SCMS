<?php
$title = "Upload Document";
$javascript = "../Script/uploadval.js";
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
        <form class="" name="FilesUpload" action="../Controller/uploadCheck.php" onsubmit="return val()" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Upload</legend>
                <input type="file" id="picture" name="picture"><br>
                <hr>
                <input type="submit" name="submit" value="submit">
                
                <colspan="3">
                    <center>
                        <div id="error_messege">
                        </div>
                    </center>
                
            </fieldset>
            
               
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