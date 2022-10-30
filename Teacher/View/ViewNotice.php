<?php
	
  require_once('../Model/DatabaseConnection.php');
	$GetNotice = getAllNotice();
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
            <?php	include('Sidebar.php'); ?>
        </div>

        <div class="dashboard-table">
            <tr>
            <tr>
                <td align="Left"><img height="100px" weight="100px" src="../Resources/notice.jpg" alt=""></td>
                <td align="Center">
                    <b>
                        View the Notices
                    </b>
                </td>
            </tr>
            <td height="150px" weight="150px">


            </td>
            <td>
                <fieldset>

                    <form class="" action="" method="post">
                        <?php
								echo "<table border = 1 width='100%' cellspacing = 0  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Notice</td>
								    <td>Time</td>
                    <td>Action</td>
								</tr>";
								for($i = 0; $i<count($GetNotice); $i++){
								    echo "<tr align = 'center'>
								    <td>{$GetNotice[$i]['id']}</td>
								    <td>{$GetNotice[$i]['notice']}</td>
								    <td>{$GetNotice[$i]['time']}</td>
                    <td> <a href='EditNotice.php?id={$GetNotice[$i]['id']}'> Edit </a> | <a href='DeleteNotice.php?id={$GetNotice[$i]['id']}'> Delete </a>  </td>
								</tr>";
								}
								echo "</table>";
								?>
                    </form>
                </fieldset>
            </td>
            </tr>
            </table>
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