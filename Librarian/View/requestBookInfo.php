<?php $title= "Request of Book";
	include('headerContent.php');
  include_once('../Model/usersmodel.php');
  $requestBookInfo = ViewRequestBook();
   ?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Request Book Info</title>
  <style>
    <?php include '../Style/requestBookInfo.css'; ?>
  </style>
</head>

<body>
  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table"> 

    <div class="title">
        <h2><?php echo $title; ?></h2>
    </div>

          <form action="../Controller/searchBookCheck.php" method="post">
          <div id="notice">
          <table align="center" border="1">
                    <tr>
                      <th>Serial No</th>
                      <th>ISBN</th>
                      <th>Book Title</th>
                      <th>Author</th>
                      <th>Edition</th>
                      <th>Student ID</th>
                      <th>Request Date</th>
                      <th>Action</th>
                    </tr>
                    <tr>

                  <?php  for($i=0; $i < count($requestBookInfo); $i++){ ?>
                 <tr>
                   <td><?php echo $requestBookInfo[$i]['sl'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['isbn'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['title'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['author'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['edition'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['id'] ?></td>
                   <td><?php echo $requestBookInfo[$i]['requestdate'] ?></td>
                   <td><a href="issueNewBook.php?id=<?php echo $requestBookInfo[$i]['id']; ?>">Add Issue Book</a></td>
                   
                  </tr><?php  } ?>
             </table>
              </div> 
          </form>
        </td>
      </tr>

      </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html>