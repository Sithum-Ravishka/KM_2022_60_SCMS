<?php
$title= "View Profile";
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



        <td>
            <fieldset>
                <legend>MY PROFILE</legend>
            <form class="" action="" method="post"> 
               <table>
               <tr>
                <td>Name</td>
                <td>:</td>
                <td><?php echo $viemyinfo['name']; ?></td>
               </tr>

               <tr>
                <td>Email</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['email']; ?></td>
               </tr>

               <tr>
                <td>Mobile No</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['mobile']; ?></td>
               </tr>
              
               <tr>
                <td>Student Id</td> 
                <td>:</td>
                <td> <?php echo $viemyinfo['id']; ?></td>
               </tr>

               <tr>
                <td>Gender</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['gender']; ?></td>
               </tr>


               <tr>
                <td>Date of Birth</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['dob']; ?></td>
               </tr>

               <tr>
                <td>Present Address</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['p_address']; ?></td>
               </tr>

               <tr>
                <td>Class</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['class']; ?></td>
               </tr>

               
               
               <tr>
                <td>Section</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['section']; ?></td>
               </tr>

            
               <tr>
                <td>Roll No</td> 
                <td>:</td>
                <td><?php echo $viemyinfo['roll']; ?></td>
               </tr>

               
               
               </table>
               
            </form>
            </fieldset>
            <a href="edit.php">Edit</a>
        </td>
      </tr>

      
  </div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>