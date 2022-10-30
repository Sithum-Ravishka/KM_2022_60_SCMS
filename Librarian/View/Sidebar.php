<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <style>
    <?php include '../Style/Side-bar.css'; ?>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="../Script/adminloginVal.js"></script>
</head>

<body>
  <div class="sidebar-content">
    <div class="single-sidebar-widget hidden-md hidden-sm hidden-xs">


      <div class="special-links">

        <li><a href="viewLibrarianProfile.php">My Profile</a></li>
        <li><a href="addnewbook.php">Add New Book</a></li>
        <li><a href="allBooksInfo.php">All Book Information</a></li>
        <li><a href="viewStudentsList.php">View Students List</a></li>
        <li><a href="noticeForm.php">New Book Arrival Notice</a></li>
        <li><a href="studentLibraryAcc.php">Create Student Library Account</a></li>
        <li><a href="viewAllStudentsLibProfile.php">View Student Library Account</a></li>
        <!-- <li><a href="issueNewBook.php">Add Issue Book</a></li> -->
        <li><a href="issuedBookHistory.php">Issue Book History</a></li>
        <li><a href="searchBookInfo.php">searchBookInfo</a></li>
        <li><a href="requestBookInfo.php">Request of Book</a></li>


      </div>
    </div>

  </div>
</body>

</html>