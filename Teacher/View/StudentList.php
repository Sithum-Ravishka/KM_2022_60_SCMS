<?php

  require_once('../Model/DatabaseConnection.php');
	$StudentList = getAllUser();
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Student List</title>
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
                    <h2>
                        <center>Student List</center>
                    </h2>

                    <td>
                        <fieldset>

                            <form class="" action="" method="post">
                                <hr>



                </div>
                <div id="myh1" class="">
                    <br>

                    <?php
								echo "<table border = 5 width='150%' cellspacing = 60   >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Name</td>
								    <td>Email</td>
								    <td>Mobile</td>
										<td>Gender</td>
										<td>Date of Birth</td>
                    <td>Class</td>
                    <td>Section</td>
                    <td>Roll</td>
                    <td>Present Address</td>
								    <td>Profile View</td>
								</tr>";
								for($i = 0; $i<count($StudentList); $i++){
								    echo "<tr align = 'center'>
								    <td>{$StudentList[$i]['id']}</td>
								    <td>{$StudentList[$i]['name']}</td>
								    <td>{$StudentList[$i]['email']}</td>
								    <td>{$StudentList[$i]['mobile']}</td>
										<td>{$StudentList[$i]['gender']}</td>
										<td>{$StudentList[$i]['dob']}</td>
                    <td>{$StudentList[$i]['class']}</td>
                    <td>{$StudentList[$i]['section']}</td>
                    <td>{$StudentList[$i]['roll']}</td>
                    <td>{$StudentList[$i]['p_address']}</td>
								    <td> <a href='StudentProfile.php?id={$StudentList[$i]['id']}'> View Profile </a></td>
								</tr>";
								}
								echo "</table>";
								?>

                </div>


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