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
                <div id="maincontent">
                    <h1>
                        <center>Change Password</center>
                    </h1>


                </div>
                <br><br>

                <td>
                    <fieldset>

                        <form class="" id="ChangePassword" action="../Controller/ChangePassCheck.php" method="post"
                            onsubmit="return ChangePassword()">
                            <table>
                                <tr>
                                    <td>Current Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :&nbsp &nbsp</td>
                                    <td><input type="password" id="password" name="password" value=""></td>
                                </tr>
                                <tr>
                                    <td>New Password
                                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp
                                    </td>
                                    <td><input type="password" id="newpass" name="newpassword" value=""></td>
                                </tr>
                                <tr>
                                    <td>Retype New Password &nbsp &nbsp &nbsp:&nbsp &nbsp</td>
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