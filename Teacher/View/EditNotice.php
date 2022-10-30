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
            <tr>
                <td align="Left"><img height="80px" weight="80px" src="../Resources/notice.jpg" alt=""></td>
                <td align="Center">
                    <b>
                        Notice Update
                    </b>
                </td>
            </tr>

            <td>
                <fieldset>
                    <legend>EDIT NOTICE</legend>
                    <form class="" id="EditNotice" action="../Controller/UpdateNoticeCheck.php" method="post"
                        onsubmit="return Notice()">
                        <table>
                            <tr>
                                <td>ID</td>
                                <td>:<input type="number" id="id" name="ID" disabled value="<?php echo $User['id']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Notice</td>
                                <td>:<textarea id="notice" name="notice" rows="8"
                                        cols="80"><?php echo $User['notice']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>:<input type="text" id="times" name="times" disabled
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