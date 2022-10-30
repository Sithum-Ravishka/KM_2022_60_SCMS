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
    <title>Teacher Dashboard</title>
    <style>
    <?php include '../Style/dashboard.css';
    ?><?php include '../Style/dashboardHome.css';
    ?>
    </style>

    <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- fontawesome css -->
</head>

<body>
    <?php	include('headerContent.php'); ?>

    <div class="dashboard-content">
        <div class="dashboard-sidebar">
            <?php	include('Sidebar.php'); ?>
        </div>

        <div class="dashboard-table">

            <div>
                <h4>Welcome <?php echo $User['name'];?></h4>
            </div>

            <div id="maincontent">
                <h1>
                    <center>Teacher Dashboard</center>
                </h1>


            </div>

            </tr>
            <br>

            <div>
                <div class="stu-marks">
                    <div class="stumarks">
                        <a href="StudentListMarks.php"><img height="160px" weight="160px" src="../images/marks.png"
                                alt=""></a>
                        <br>
                        <a href="StudentListMarks.php">Student Marks</a>
                    </div>

                    <div class="student">
                        <a href="StudentList.php"><img height="157px" weight="157px" src="../images/StudentsMarks.png"
                                alt=""></a>
                        <br>
                        <a href="StudentList.php">Students List</a>
                    </div>

                    <div class="not-lib-lea">
                        <div class="notice-board">
                            <a href="ViewNotice.php"><img height="160px" weight="160px" src="../images/Noticeboard.png"
                                    alt=""></a>
                            <br>
                            <a href="ViewNotice.php">Notice Board</a>
                        </div>



                    </div>

                    <div class="cou">


                    </div>



                </div>

            </div>
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