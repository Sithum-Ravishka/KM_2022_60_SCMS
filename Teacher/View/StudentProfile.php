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
    <title>Schedule</title>
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
            <tr>
                <td align="Left"><img height="80px" weight="80px" src="../Resources/Student.jpg" alt=""></td>
                <td align="Center">
                    <b>
                        Student's Profile Information
                    </b>
                </td>
            </tr>
            <td height="150px" weight="150px">


            </td>
            <td>
                <fieldset>
                    <legend>STUDENT PROFILE</legend>
                    <form class="" action="" method="post">
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>:<?php echo $User['name'];?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:<?php echo $User['email'];?></td>
                            </tr>
                            <tr>
                                <td>Mobile No.</td>
                                <td>:<?php echo $User['mobile'];?></td>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td>:<?php echo $User['id'];?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:<?php echo $User['gender'];?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>:<?php echo $User['dob'];?></td>
                            </tr>
                            <tr>
                                <td>Present Address</td>
                                <td>:<?php echo $User['p_address'];?></td>
                            </tr>
                            <tr>
                                <td>Class</td>
                                <td>:<?php echo $User['class'];?></td>
                            </tr>
                            <tr>
                                <td>Section</td>
                                <td>:<?php echo $User['section'];?></td>
                            </tr>
                            <tr>
                                <td>Roll</td>
                                <td>:<?php echo $User['roll'];?></td>
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