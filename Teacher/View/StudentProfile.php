<?php

  require_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
	$User =  getStudentById($Id);
  $_SESSION['id'] = $Id;
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Student Profile</title>
    <style>
    <?php include '../Style/dashboard.css';
    ?>
    </style>


</head>

<body>
    <?php	include('headerContent.php'); ?>

    <div class="dashboard-content">
        <div class="dashboard-sidebar">
            <?php	include('SidebarNew.php'); ?>
        </div>

        <div class="dashboard-table">
            <tr>

                <div id="maincontent">
                    <h1>
                        <center>Students Profile nformation</center>
                    </h1>
                </div>
                <td>

                    <br><br>
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
                                <tr>
                                    <td>Present Address</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['p_address'];?></td>
                                </tr>
                                <tr>
                                    <td>Class</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['class'];?></td>
                                </tr>
                                <tr>
                                    <td>Section</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['section'];?></td>
                                </tr>
                                <tr>
                                    <td>Roll</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<?php echo $User['roll'];?></td>
                                </tr>
                            </table>
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