<?php
	
  require_once('../Model/DatabaseConnection.php');
  $User = getUserById($_COOKIE['ID']);
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Notice</title>
    <style>
    <?php include '../Style/dashboard.css';
    ?>
    </style>


</head>

<body>
    <?php	include('headerContent.php'); ?>

    <div class="dashboard-content">
        <div class="dashboard-sidebar">
            <?php	include('Sidebar.php'); ?>
        </div>

        <div class="dashboard-table">
            <tr>
            <tr>
                <div id="maincontent">
                    <h1>
                        <center>Teacher Profile</center>
                    </h1>


                </div>

                <br>
                <br>

                <td>
                    <fieldset>

                        <form class="" action="" method="post">
                            <table>
                                <tr>
                                    <td>ID</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['id'];?></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['name'];?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['email'];?></td>
                                </tr>
                                <tr>
                                    <td>Mobile No.</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['mobile'];?></td>
                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['gender'];?></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['dob'];?></td>
                                </tr>
                            </table>
                            <hr>
                            <a href="EditProfile.php">Edit Profile</a>
                        </form>
                    </fieldset>
                </td>
            </tr>
        </div>

    </div>
    <?php include('footer1.php'); ?>

</body>

</html>
<?php

	}else{
		header('location: LoginPage.php');
	}

?>