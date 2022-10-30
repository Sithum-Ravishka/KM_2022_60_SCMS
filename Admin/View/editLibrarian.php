<?php
$title = "Update Librarian";
$js = "../Script/editValidation.js";
include_once('../model/librarianModel.php');
$id = $_GET['id'];
$updatemyinfo = getUserbyid($id);
$_SESSION['id'] = $id;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Librarian Update</title>
  <style>
    <?php include '../Style/addLibrarian.css'; ?>
  </style>

  <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- fontawesome css -->
</head>

<body>
  <?php include('headerContent.php'); ?>

  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('SidebarLibrarian.php'); ?>
    </div>

    <div class="dashboard-table">
      <td>







        <div class="form-body">
          <form id="inform" action="../controller/updateCheckLibrarian.php" onsubmit="return validation()" method="post">


            <legend>Edit Librarian</legend>

            <center>
              <div id="error_messege">
              </div>
            </center>


            <div class="form-set">
              <div class="form-group">
                <label for="exampleInputName">Librarian ID</label>
                <input type="text" id="id" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>" class="form-control" placeholder="Enter Librarian ID" required="required">
              </div>

              <div class="form-right">
                <div class="form-group">
                  <label for="exampleInputName">Librarian Name</label>
                  <input type="text" id="name" name="name" value="<?php echo $updatemyinfo['name']; ?>" class="form-control" placeholder="Enter Librarian Full Name" required="required">
                </div>
              </div>
            </div>

            <div class="form-set">
              <div class="form-group">
                <label for="exampleInputEmail1">Librarian E-mail</label>
                <input type="email" id="email" name="email" value="<?php echo $updatemyinfo['email']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Librarian E-mail" required="required">

              </div>
              <div class="form-right">
                <div class="form-group">
                  <label for="exampleInputEmail1">Librarian Mobile No</label>
                  <input type="text" id="mobile" name="mobile" value="<?php echo $updatemyinfo['mobile']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Librarian Mobile No" required="required">

                </div>
              </div>
            </div>

            <div class="form-check form-check-inline">
              <label for="exampleInputEmail1">Librarian Gender</label>
              <input type="radio" id="gender" name="gender" <?php if ($updatemyinfo['gender'] == "male") { ?> checked="true" <?php } ?> value="male" class="form-check-input">
              <label class="form-check-label" for="inlineRadio1">Male</label>

              <input type="radio" id="gender" name="gender" <?php if ($updatemyinfo['gender'] == "female") { ?> checked="true" <?php } ?> value="female" class="form-check-input">Female
              <input type="radio" id="gender" name="gender" <?php if ($updatemyinfo['gender'] == "other") { ?> checked="true" <?php } ?> value="other" class="form-check-input">Other
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Librarian Date of Birth</label>
              <input type="date" id="dob" name="dob" value="<?php echo $updatemyinfo['dob']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter Librarian E-mail" required="required">

            </div>

            <br>
            <div class="form-button">
              <button type="reset" id="reset" name="reset" value="Reset" class="btn btn-primary" class="loginBtn">Reset</button>
              <button type="submit" name="update" value="Update" class="btn btn-primary" class="loginBtn">Submit</button>
          </form>
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