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
            <?php	include('Sidebar.php'); ?>
        </div>

        <div class="dashboard-table">
            <tr>
            <tr>
                <td align="Left"><img height="80px" weight="80px" src="../Resources/routine.jpg" alt=""></td>
                <td align="Center">
                    <b>
                        Class Schedule
                    </b>
                </td>
            </tr>
            <td height="150px" weight="150px">


            </td>
            <td>
                <fieldset>
                    <form class="" action="" method="post">
                        <table>
                            <tr>
                                <td>Teacher's Name</td>
                                <td>:<?php echo $User['name'];?></td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>:<?php echo $User['subject'];?></td>
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