<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Admin Dashboard</title>
  <style>
    <?php include '../Style/dashboardHome.css'; ?>
  </style>

  <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- fontawesome css -->
</head>

<body>
  <?php include('headerContent.php'); ?>

  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table">
      <div class="dashboard-content">
        <div>
          <div class="stu-tea-lib">
              <div class="teacher">
                <a href="addTeacher.php"><img height="120px" weight="120px" src="../Resources/teach.jpg" alt=""></a>
                <br>
                <a href="addTeacher.php">Teacher</a>
              </div>

              <div class="student">
                <a href="addStudent.php"><img height="100px" weight="100px" src="../Resources/student1.jpg" alt=""></a>
                <br>
                <a href="addStudent.php">Student</a>
              </div>

              <div class="librarian">
                <a href="addLibrarian.php"><img height="100px" weight="100px" src="../Resources/libary2.jpg" alt=""></a>
                <br>
                <a href="addLibrarian.php">Librarian</a>
              </div>
              <div class="course">
                <a href="addCourse.php"><img height="100px" weight="100px" src="../Resources/index.png" alt=""></a>
                <br>
                <a href="addCourse.php">Courses</a>
              </div>
          </div>

            <div class="not-lib-lea">
              <div class="notice-board">
                <a href="postNotice.php"><img height="100px" weight="100px" src="../Resources/note.png" alt=""></a>
                <br>
                <a href="postNotice.php">Notice Board</a>
              </div>

              <div class="library-book">
                <a href="libraryBook.php"><img height="100px" weight="100px" src="../Resources/libary3.png" alt=""></a>
                <br>
                <a href="libraryBook.php">Library Book Details</a>
              </div>
              <div class="leave-request">
                <a href="leaveRequest.php"><img height="100px" weight="100px" src="../Resources/leave.png" alt=""></a>
                <br>
                <a href="leaveRequest.php">Leave Request</a>
              </div>
              <div class="register-admin">
                <a href="regester.php"><img height="100px" weight="100px" src="../Resources/signup.png" alt=""></a>
                <br>
                <a href="regester.php">Admin Registration </a>
              </div>


            </div>

            <div class="cou">

            
            </div>



        </div>
      </div>
    </div>


  </div>

  </div>
  <?php include('footer.php'); ?>

</body>

</html>