<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Admin Dashboard</title>
  <style>
    <?php include '../Style/dashboardHome.css'; ?>
  </style>

  <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- fontawesome css -->
</head>

<body>
  <?php include('headerContent.php'); ?>

  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table">

              <div class="form-body">
                <form class="" id="myform" action="../Controller/regCheck.php" onsubmit="return validation()" method="post">

                    <legend>Admin Register</legend>

                          <!-- <center>
                          <div id="error_messege">
                          </div>
                        </center> -->

       
                      <div class="form-group">
                        <label for="exampleInputName">Admin ID</label> 
                        <input type="text" id="id" name="id" value="" class="form-control" 
                        placeholder="Enter Admin ID" required="required">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName">Admin Name</label> 
                        <input type="text" id="name"name="name" class="form-control" 
                        placeholder="Enter Admin Full Name" required="required">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Admin E-mail</label> 
                        <input type="email" id="email" name="email"  value="" class="form-control" aria-describedby="emailHelp" 
                        placeholder="Enter Admin E-mail" required="required">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label> 
                        <input type="password" id="password" name="password" value="" class="form-control"
                         placeholder="Enter Your Password" required="required">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label> 
                        <input type="password" id="repass" name="repass" value="" class="form-control"
                         placeholder="Enter Your Password" required="required">
                    </div>
         
                    <br>
                    <button type="submit" id="submit" name="signup" value="SIGN UP" class="loginBtn">LOGIN</button>
                    <button type="reset" id="reset" name="reset" value="Reset" class="loginBtn">LOGIN</button>

              </div>
                </div>
        </div>
  

    <?php include('footer.php'); ?>


</body> 

</html>
