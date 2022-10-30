<?php
	
  require_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
	$User =  getNoticeById($Id);
  $_SESSION['id'] = $Id;
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>View Notice</title>
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
                        <center>Update Notice</center>
                    </h1>
                </div>
                <td>

                    <br><br>

                <td>
                    <fieldset>

                        <form class="" id="EditNotice" action="../Controller/UpdateNoticeCheck.php" method="post"
                            onsubmit="return Notice()">
                            <table>
                                <tr>
                                    <td>ID</td> <br>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<input type="number" id="id" name="ID" disabled
                                            value="<?php echo $User['id']; ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Notice</td>
                                    <td>&nbsp &nbsp &nbsp &nbsp<textarea id="notice" name="notice" rows="5"
                                            cols="50"><?php echo $User['notice']; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<input type="text" id="times" name="times" disabled
                                            value="<?php echo $User['time']; ?>"></td>
                                </tr>
                            </table>
                            <hr>
                            <input type="submit" name="update" value="Update">
                            <center>
                                <div id="error_messege">
                                </div>
                            </center>
                        </form>
                    </fieldset>
                </td>
            </tr>

            </table>

</body>

</html>


<?php

	}else{
		header('location: LoginPage.php');
	}

?>