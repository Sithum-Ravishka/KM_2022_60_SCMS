<?php
	$title= "Add course";
	$js = "../Script/addCourseVal.js";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Course Register</title>
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
                <?php	include('SidebarCourse.php'); ?>
							</div>

              <div class="dashboard-table">
							

      
      <div class="form-body">
      <form id="inform" class="" action="../Controller/addCheckCourse.php" onsubmit="return validation()" method="post">


          <legend>Create Course</legend>

          <!-- <center>
                          <div id="error_messege">
                          </div>
                        </center> -->


            <div class="form-group">
              <label for="exampleInputName">Course Name</label>
              <input input type="text" id="name" name="name" class="form-control" placeholder="Enter Course Name" required="required">
            </div>
          

          <div class="form-group">
            <label for="exampleInputEmail1">Description</label><br>
            <textarea name="description" id="description" rows="7" cols="50" aria-describedby="emailHelp" placeholder="Enter Course Description" required="required"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Class</label>
            <select id="classE" name="class">
                              <option value="Six">Six</option>
                              <option value="Seven">Seven</option>
                              <option value="Eight">Eight</option>
                              <option value="Nine">Nine</option>
                              <option value="Ten">Ten</option>
                            </select>
            </div>

          <br>
          <div class="form-button">
          <button type="reset" id="reset" name="reset" value="Reset" class="btn btn-primary" class="loginBtn">Reset</button>
          <button  type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary" class="loginBtn">Create</button>

          </div>
      </div>
      <div class="regImg">
                <img alt="" src="../Resources/course1.jpg">
            </div>




      </div>
	  </div>     
<?php include('footer.php'); ?>

</body>
</html>

