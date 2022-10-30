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
    <style>
    <?php include '../Style/Side-bar.css';
    ?>
    </style>
    <style media="screen">
    #error_messege {
        color: White;
        font-weight: bold;
        margin-bottom: 20px;
        padding: 0px;
        background: #de0404;
        text-align: center;
        font-size: 18px;
        transition: all 0.5s ease;
    }
    </style>

    <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../Script/adminloginVal.js"></script>
</head>

<body>
    <div class="sidebar-content">
        <div class="sidebar-log-information">
            <div class="logger-name">
                <span>Loged in As</span>
                <span class="login-name">
                    <?php echo $User['name'];?>

                </span>
                <p>(Teacher)</p>
            </div>
        </div>
        <div class="single-sidebar-widget hidden-md hidden-sm hidden-xs">


            <div class="special-links">

                <li><a href="TeacherDashboard.php">Dashboard</a></li>
                <li><a href="ViewProfile.php">View Profile</a></li>
                <li><a href="StudentList.php">View Student's Profile</a></li>
                <li><a href="NoticeBoard.php">Notice Board</a></li>
                <li><a href="ViewSchoolNotice.php">School Notice</a></li>
                <li><a href="StudentListMarks.php">Student Marks</a></li>
                <li><a href="ChangePass.php">Reset Password</a></li>


            </div>
        </div>

    </div>
</body>

</html>

<?php

	}else{
		header('location: LoginPage.php');
	}

?>