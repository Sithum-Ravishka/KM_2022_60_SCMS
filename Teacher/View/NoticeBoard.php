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
                        <center>Upload Notice</center>
                    </h1>
                </div>
                <td>

                    <br><br>
                <td height="150px" weight="150px">

                    <fieldset>

                        <form class="" id="Notice" action="../Controller/NoticeCheck.php" method="post"
                            onsubmit="return Notice()">
                            <table align="center">
                                <tr>
                                    <td>
                                        <textarea id="notice" name="notice" rows="8" cols="80"
                                            placeholder="Enter Notice Here"></textarea>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <center>
                                <input type="submit" name="submit" value="Upload"> &nbsp &nbsp &nbsp
                                <a href="ViewNotice.php">View Notice</a>
                            </center>
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