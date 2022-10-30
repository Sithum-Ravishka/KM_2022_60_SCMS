<?php
	
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Notice Board</title>
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
                <td align="Left"><img height="80px" weight="80px" src="../Resources/password.webp" alt=""></td>
                <td align="Center">
                    <b>
                        Password Change
                    </b>
                </td>
            </tr>
            <td height="150px" weight="150px">


            </td>
            <td>
                <fieldset>

                    <form class="" id="ChangePassword" action="../Controller/ChangePassCheck.php" method="post"
                        onsubmit="return ChangePassword()">
                        <table border="1">
                            <tr>
                                <td>Current Password:</td>
                                <td><input type="password" id="password" name="password" value=""></td>
                            </tr>
                            <tr>
                                <td>New Password:</td>
                                <td><input type="password" id="newpass" name="newpassword" value=""></td>
                            </tr>
                            <tr>
                                <td>Retype New Password:</td>
                                <td><input type="password" id="repass" name="repassword" value=""></td>
                            </tr>
                        </table>
                        <hr>
                        <input type="submit" name="Change" value="Change"> <br>
                        <center>
                            <div id="error_messege">
                            </div>
                        </center>
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