<?php
	$title= "notice";
	$js = "../Script/noticeVal.js";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <style>
		<?php include '../Style/addTeacher.css'; ?>
	</style>

     <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- fontawesome css -->
  </head>
  <body>
<?php	include('headerContent.php'); ?>

<div class="dashboard-content">
							<div class="dashboard-sidebar">
                <?php	include('SidebarNotice.php'); ?>
							</div>

              <div class="dashboard-table">
   

            
      <div class="form-body">
      <form  class="" id="inform" action="../Controller/postCheckNotice.php" onsubmit="return validation()" method="post">


          <legend>Publish Notice</legend>

          <!-- <center>
                          <div id="error_messege">
                          </div>
                        </center> -->

          <div class="form-group">
            <label for="exampleInputEmail1">Notice</label><br>
            <textarea id="notice" name="notice" rows="7" cols="50" aria-describedby="emailHelp" placeholder="Enter Notice Here" required="required"></textarea>
          </div>


          <br>
          <div class="form-button">
          <button type="reset" id="reset" name="reset" value="Reset" class="btn btn-primary" class="loginBtn">Reset</button>
          <button  type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary" class="loginBtn">Post</button>

          </div>
      </div>
      <div class="regImg">
                <img alt="" src="../Resources/Register-home.png">
            </div>


      </div>
	  </div>     
<?php include('footer.php'); ?>

</body>
</html>
