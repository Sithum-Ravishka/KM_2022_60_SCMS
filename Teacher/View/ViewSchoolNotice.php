<?php

  require_once('../Model/DatabaseConnection.php');
	$GetNotice = getAllSchoolNotice();
	if(isset($_COOKIE['flag']))
	{
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>View School Notice</title>
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
                        <center>View School Notice</center>
                    </h1>
                </div>
                <td>

                    <br><br>

                <td>
                    <fieldset>

                        <form class="" action="" method="post">
                            <?php
								echo "<table border = 5 width='250%' cellspacing = 60  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Notice</td>
								    <td>Time</td>
								</tr>";
								for($i = 0; $i<count($GetNotice); $i++){
								    echo "<tr align = 'center'>
								    <td>{$GetNotice[$i]['id']}</td>
								    <td>{$GetNotice[$i]['notice']}</td>
								    <td>{$GetNotice[$i]['time']}</td>
								</tr>";
								}
								echo "</table>";
								?>
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