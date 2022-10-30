<?php
	$title= "add librarian";
	$js = "../Script/addValidation.js";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Librarian Register</title>
    <style>
		<?php include '../Style/addLibrarian.css'; ?>
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

 <div class="form-body">
        <form  class="" id="myform" action="../Controller/regCheckLibrarian.php" onsubmit="return validation()" method="post">

          <legend>Librarian Register</legend>

          <!-- <center>
                          <div id="error_messege">
                          </div>
                        </center> -->


         <div class="form-set">
            <div class="form-group">
              <label for="exampleInputName">Librarian ID</label>
              <input type="text" id="id" name="id" value="" class="form-control" placeholder="Enter Librarian ID" required="required">
            </div>
          
            <div class="form-right">
            <div class="form-group">
              <label for="exampleInputName">Librarian Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter Librarian Full Name" required="required">
            </div>
            </div>
          </div>

          <div class="form-set">
          <div class="form-group">
            <label for="exampleInputEmail1">Librarian E-mail</label>
            <input type="email" id="email" name="email" value="" class="form-control" aria-describedby="emailHelp" placeholder="Enter Librarian E-mail" required="required">

          </div>
          <div class="form-right">
          <div class="form-group">
            <label for="exampleInputEmail1">Librarian Mobile No</label>
            <input type="text" id="mobile" name="mobile" class="form-control" aria-describedby="emailHelp" placeholder="Enter Librarian Mobile No" required="required">

          </div>
          </div>
          </div>

          <div class="form-set">
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" id="password" name="password" value="" class="form-control" placeholder="Enter Your Password" required="required">
          </div>
          <div class="form-right">
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" id="repass" name="repass" value="" class="form-control" placeholder="Enter Your Password" required="required">
          </div>
          </div>
          </div>

          
          <div class="form-check form-check-inline">
            <label for="exampleInputEmail1">Librarian Gender</label>
                             <input type="radio" id="gender" name="gender" value="male"  class="form-check-input">
                             <label class="form-check-label" for="inlineRadio1">Male</label>

                            <input type="radio" id="gender" name="gender" value="female"  class="form-check-input">Female
                            <input type="radio" id="gender" name="gender" value="other"  class="form-check-input">Other
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Librarian Date of Birth</label>
            <input  type="date" id="dob" name="dob" value="" class="form-control" aria-describedby="emailHelp" placeholder="Enter Librarian E-mail" required="required">

          </div>

          <br>
          <div class="form-button">
          <button type="reset" id="reset" name="reset" value="Reset" class="btn btn-primary" class="loginBtn">Reset</button>
          <button  type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary" class="loginBtn">Submit</button>

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