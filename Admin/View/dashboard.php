<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <style>
		<?php include '../Style/dashboard.css'; ?>
	</style>

     <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- fontawesome css -->
  </head>
  <body>
<?php	include('headerContent.php'); ?>

<div class="dashboard-content">
							<div class="dashboard-sidebar">
                <?php	include('Sidebar.php'); ?>
							</div>

              <div class="dashboard-table">
              <td>
                <table id="box" border="1" width ="100%" cellspacing="0">
                  <tr >
                    <td  align = "center">
                      <a href="addTeacher.php"><img height="100px" weight="100px" src="../Resources/Teacher.jpg" alt=""></a>
                      <br>
                      <a href="addTeacher.php">Teacher</a>
                    </td>

                    <td align = "center">
                      <a href="addStudent.php"><img height="100px" weight="100px" src="../Resources/student.jpg" alt=""></a>
                      <br>
                      <a href="addStudent.php">Student</a>
                    </td>

                    <td align = "center">
                      <a href="addLibrarian.php"><img height="100px" weight="100px" src="../Resources/librarian.jpg" alt=""></a>
                      <br>
                      <a href="addLibrarian.php">Librarian</a>
                    </td>



                  </tr>

                  <tr>
										<td align = "center">
                      <a href="postNotice.php"><img height="100px" weight="100px" src="../Resources/notice.jpg" alt=""></a>
                      <br>
                      <a href="postNotice.php">Notice Board</a>
                    </td>

										<td align = "center">
											<a href="libraryBook.php"><img height="100px" weight="100px" src="../Resources/libraryBook.jpg" alt=""></a>
											<br>
											<a href="libraryBook.php">Library Book Details</a>
										</td>
										<td align = "center">
                      <a href="leaveRequest.php"><img height="100px" weight="100px" src="../Resources/leaverequest.png" alt=""></a>
                      <br>
                      <a href="leaveRequest.php">Leave Request</a>
                    </td>


                  </tr>

                  <tr>
										<td align = "center">

                    </td>

                    <td align = "center">
                      <a href="addCourse.php"><img height="100px" weight="100px" src="../Resources/course.jpg" alt=""></a>
                      <br>
                      <a href="addCourse.php">Courses</a>
                    </td>



                    <td align = "center">

                    </td>
                  </tr>



                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>


</div>

      </div>     
<?php include('footer.php'); ?>

</body>
</html>
