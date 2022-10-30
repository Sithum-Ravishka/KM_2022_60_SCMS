<?php
$title = "Edit Profile";
$javascript = "../Script/editval.js";
include_once('../model/DatabaseConnection.php');
$viemyinfo = getUserbyid($_COOKIE['id']);
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
    <legend>Edit Profile</legend>
    <form class="" action="../Controller/editCheck.php" onsubmit="return val()" method="post">
      <table>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td><input type="text" id="name" name="name" placeholder="Enter Full Name" value="<?php echo $viemyinfo['name']; ?>"></td>
        </tr>

        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="email" id="email" name="email" value="<?php echo $viemyinfo['email']; ?>"></td>
        </tr>

        <tr>
          <td>Mobile No</td>
          <td>:</td>
          <td><input type="number" id="mobile" name="mobile" value="<?php echo $viemyinfo['mobile']; ?>"></td>
        </tr>

        <tr>
          <td>Student Id</td>
          <td>:</td>
          <td> <input type="number" id="id" name="id" value="<?php echo $viemyinfo['id']; ?>"></td>
        </tr>

        <tr>
          <td>Gender</td>
          <td>:</td>
          <td><input type="radio" id="gender" name="gender" <?php if ($viemyinfo['gender'] == "male") { ?> checked="true" <?php } ?> value="male">Male
            <input type="radio" id="gender" name="gender" <?php if ($viemyinfo['gender'] == "female") { ?> checked="true" <?php } ?> value="female">Female
            <input type="radio" id="gender" name="gender" <?php if ($viemyinfo['gender'] == "other") { ?> checked="true" <?php } ?> value="other">Other
          </td>
        </tr>


        <tr>
          <td>Date of Birth</td>
          <td>:</td>
          <td><input type="date" id="dob" name="dob" value="<?php echo $viemyinfo['dob']; ?>"></td>
        </tr>

        <tr>
          <td>Present Address</td>
          <td>:</td>
          <td><input type="text" id="p_address" name="p_address" value="<?php echo $viemyinfo['p_address']; ?>"></td>
        </tr>

        <tr>
          <td colspan="3">
            <center>
              <div id="error_messege">
              </div>
            </center>
          </td>
        </tr>



      </table>

      <input type="submit" name="submit" value="Request For Update">
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