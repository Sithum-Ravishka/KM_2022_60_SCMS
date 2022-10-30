<?php
	$title= "Update Student";
	$js = "../Script/editStudValidation.js";
	include_once('../model/studentModel.php');
  $id = $_GET['id'];
  $updatemyinfo = getUserbyid($id);
  $_SESSION['id'] = $id;
?>
								  
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Update</title>
    <style>
		<?php include '../Style/addStudent.css'; ?>
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


      <div class="form-body">
      <form id="inform" action="../controller/updateCheckStudent.php" onsubmit="return validation()" method="post">


          <legend>Edit Student Profile</legend>

          <!-- <center>
                          <div id="error_messege">
                          </div>
                        </center> -->


         <div class="form-set">
            <div class="form-group">
              <label for="exampleInputName">Student ID</label>
              <input id="id" type="text" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>" class="form-control" placeholder="Enter Student ID" required="required">
            </div>
          
            <div class="form-right">
            <div class="form-group">
              <label for="exampleInputName">Student Name</label>
              <input type="text" id="name" name="name" value="<?php echo $updatemyinfo['name']; ?>" class="form-control" placeholder="Enter Student Full Name" required="required">
            </div>
            </div>
          

            <div class="form-right">
          <div class="form-group">
            <label for="exampleInputEmail1">Student E-mail</label>
            <input type="email" id="email" name="email" value="<?php echo $updatemyinfo['email']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Student E-mail" required="required">

          </div>
          </div>
          </div>

            <div class="form-set">
          
              <div class="form-group">
                <label for="exampleInputEmail1">Student Mobile No</label>
                <input type="text" id="mobile" name="mobile" value="<?php echo $updatemyinfo['mobile']; ?>"
                 class="form-control" aria-describedby="emailHelp" placeholder="Enter Student Mobile No" required="required">

              </div>

            </div>
          <div class="form-check form-check-inline">
            <label for="exampleInputEmail1">Student Gender</label>
            <input type="radio" id="gender" name="gender" <?php  if($updatemyinfo['gender']=="male"){?> checked="true" <?php } ?> value="male" class="form-check-input">
                             <label class="form-check-label" for="inlineRadio1">Male</label>
                          <input type="radio" id="gender" name="gender"  <?php if($updatemyinfo['gender']=="female"){?> checked="true" <?php } ?>  value="female">Female
                          <input type="radio" id="gender" name="gender" <?php if($updatemyinfo['gender']=="other"){?> checked="true" <?php } ?> value="other">Other
          </div>

          <div class="form-set">
          <div class="form-group">
            <label for="exampleInputEmail1">Student Date of Birth</label>
            <input  type="date" id="dob" name="dob" value="<?php echo $updatemyinfo['dob']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Student E-mail" required="required">

          </div>

          <div class="form-right">
          <div class="form-group">
            <label for="exampleInputEmail1">Present Address</label>
            <input type="text" id="p_address" name="p_address" value="<?php echo $updatemyinfo['p_address']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Present Address" required="required">

          </div>
          </div>
          </div>
  <div class="form-set">
          <div class="form-group">
            <label for="exampleInputEmail1">Class</label>
            <select id="classE" name="class">
                            <option <?php  if($updatemyinfo['class']=="Six"){?> selected="true" <?php } ?> value="Six">Six</option>
                            <option <?php  if($updatemyinfo['class']=="Seven"){?> selected="true" <?php } ?> value="Seven">Seven</option>
                            <option <?php  if($updatemyinfo['class']=="Eight"){?> selected="true" <?php } ?> value="Eight">Eight</option>
                            <option <?php  if($updatemyinfo['class']=="Nine"){?> selected="true" <?php } ?> value="Nine">Nine</option>
                            <option <?php  if($updatemyinfo['class']=="Ten"){?> selected="true" <?php } ?> value="Ten">Ten</option>
                            </select>
            </div>
            <div class="form-right">
            <div class="form-group">
            <label for="exampleInputEmail1">Section</label>
            <select id="section" name="section">
                            <option <?php  if($updatemyinfo['section']=="A"){?> selected="true" <?php } ?> value="A">A</option>
                            <option <?php  if($updatemyinfo['section']=="B"){?> selected="true" <?php } ?> value="B">B</option>
                          </select>
            </div>
            </div>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Roll No</label>
            <input type="text" id="roll" name="roll" value="<?php echo $updatemyinfo['roll']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Roll No" required="required">

          </div>

      
       
          <br>
          <div class="form-button">
          <button type="submit" name="update" value="Update" class="btn btn-primary" class="loginBtn">Submit</button>

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