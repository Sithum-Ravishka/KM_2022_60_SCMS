<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <style>
        <?php include 'css/home.css'; ?>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- fontawesome css -->

    <script src="../Script/adminloginVal.js"></script>
</head>

<body>

    <?php include('header1.php'); ?>
    <div></div>

     
        <div class="dashboard-content">

    <div class="dashboard-table">
        <div class="content-home">
          <div class="home-left"> <span class="home-sub">Login As</span>
          <div class="logImg">
                <img alt="" height="400px" weight="400px" src="Resources/home-login.jpg">
            </div>
        </div>
        <div class="home-right">
          <div class="stu-tea-lib">
              <div class="teacher">
              <a href="../Admin/index.php"><img height="130px" weight="130px" src="Resources/admin1.jpg" alt=""></a>
                <br>
                <a href="../Admin/index.php" style="text-decoration: none;  color: rgb(0, 10, 96);">Admin</a>
              </div>

              <div class="student">
              <a href="../Teacher/index.php"><img height="130px" weight="130px" src="Resources/teach.jpg" alt=""></a>
                <br>
                <a href="../Teacher/index.php" style="text-decoration: none;  color: rgb(0, 10, 96);">Teacher</a>
              </div>
          </div>

            <div class="not-lib-lea">
              <div class="notice-board">
              <a href="../student/index.php"><img height="130px" weight="130px" src="Resources/student1.jpg" alt=""></a>
                <br>
                <a href="../student/index.php"style="text-decoration: none;  color: rgb(0, 10, 96);">Student</a>
              </div>

              <div class="library-book">
              <a href="../Librarian/index.php"><img height="130px" weight="130px" src="Resources/libary3.png" alt=""></a>
                <br>
                <a href="../Librarian/index.php"style="text-decoration: none;  color: rgb(0, 10, 96);">Librarian</a>
              </div>
            </div>


            </div>
      </div>
    </div>


    </div>

  </div>
  <?php include('footer.php'); ?>

</body>

</html>
