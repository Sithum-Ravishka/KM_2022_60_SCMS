<?php
	$title= "Update teacher";
	$js = "../Script/editValidation.js";
	include_once('../model/teacherModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?> 
						<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Update</title>
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
                <?php	include('SidebarTeacher.php'); ?>
							</div>

              <div class="dashboard-table">

            
      <div class="form-body">
      <form id="inform" action="../controller/updateCheckTeacher.php" onsubmit="return validation()" method="post">


          <legend>Update Teacher Profile Information</legend>

          <!-- <center>
                          <div id="error_messege">
                          </div>
                        </center> -->


         <div class="form-set">
            <div class="form-group">
              <label for="exampleInputName">Teacher ID</label>
              <input type="text" id="id" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>" class="form-control" placeholder="Enter Teacher ID" required="required">
            </div>
          
            <div class="form-right">
            <div class="form-group">
              <label for="exampleInputName">Teacher Name</label>
              <input type="text" id="name" name="name" value="<?php echo $updatemyinfo['name']; ?>"  class="form-control" placeholder="Enter Teacher Full Name" required="required">
            </div>
            </div>
          </div>

          <div class="form-set">
          <div class="form-group">
            <label for="exampleInputEmail1">Teacher E-mail</label>
            <input type="email" id="email" name="email" value="<?php echo $updatemyinfo['email']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Teacher E-mail" required="required">

          </div>
          <div class="form-right">
          <div class="form-group">
            <label for="exampleInputEmail1">Teacher Mobile No</label>
            <input type="text" id="mobile" name="mobile" value="<?php echo $updatemyinfo['mobile']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Teacher Mobile No" required="required">

          </div>
          </div>
          </div>

          
          <div class="form-check form-check-inline">
            <label for="exampleInputEmail1">Teacher Gender</label>
                             <input type="radio" id="gender" name="gender" <?php  if($updatemyinfo['gender']=="male"){?> checked="true" <?php } ?> value="male"  class="form-check-input">
                             <label class="form-check-label" for="inlineRadio1">Male</label>

                            <input  type="radio" id="gender" name="gender"  <?php if($updatemyinfo['gender']=="female"){?> checked="true" <?php } ?>  value="female"  class="form-check-input">Female
                            <input type="radio" id="gender" name="gender" <?php if($updatemyinfo['gender']=="other"){?> checked="true" <?php } ?> value="other"  class="form-check-input">Other
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Teacher Date of Birth</label>
            <input type="date" id="dob" name="dob" value="<?php echo $updatemyinfo['dob']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Librarian E-mail" required="required">

          </div>

       
          <div class="form-group">
            <label for="exampleInputEmail1">Subject</label>
              <select id="subject" name="subject">
														<option <?php  if($updatemyinfo['subject']=="sinhala"){?> selected="true" <?php } ?> value="sinhala">sinhala</option>
														<option <?php  if($updatemyinfo['subject']=="English"){?> selected="true" <?php } ?> value="English">English</option>
														<option <?php  if($updatemyinfo['subject']=="Math"){?> selected="true" <?php } ?> value="Math">Math</option>
														<option <?php  if($updatemyinfo['subject']=="History"){?> selected="true" <?php } ?> value="History">History</option>
														<option <?php  if($updatemyinfo['subject']=="ICT"){?> selected="true" <?php } ?> value="ICT">ICT</option>
														<option <?php  if($updatemyinfo['subject']=="Physical education and health"){?> selected="true" <?php } ?> value="Physical education and health">Physical education and health</option>
													</select>
            </div>

          <br>
          <div class="form-button">
          <button type="reset" id="reset" name="reset" value="Reset" class="btn btn-primary" class="loginBtn">Reset</button>
          <button  type="submit" name="update" value="Update" class="btn btn-primary" class="loginBtn">Submit</button>

          </div>
      </div>
</form>
      <div class="regImg">
                <img alt="" src="../Resources/Register-home.png">
            </div>







            </div>
	  </div>     
<?php include('footer.php'); ?>

</body>
</html>