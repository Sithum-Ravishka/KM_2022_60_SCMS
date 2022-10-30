<?php $title= "issued Book History.";
include('headerContent.php');
  include_once('../Model/usersmodel.php');
  $allIssuedBookDetails = viewIssuedBookDetails();
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Footer</title>
  <style>
    <?php include '../Style/dashboard.css'; ?>
  </style>
</head>

<body>
  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table">  

        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
          <form action="../Controller/" method="post">
          <div id="notice" >
          <table align="center" border="1">
                    <tr>
                      <th>Serial No</th>
                      <th>ISBN</th>
                      <th>Book Title</th>
                      <th>Student Id</th>
                      <th>Issued Date</th>
                      <th>Return Date</th>
                      <th>Return Status</th>
                      <th>Fine</th>
                      <th>Action</th>
                    </tr>
                    <tr>

                  <?php  for($i=0; $i < count($allIssuedBookDetails); $i++){ ?>
                 <tr>
                   <td><?php echo $allIssuedBookDetails[$i]['serialno'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['isbn'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['title'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['id'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['issuesdate'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['returndate'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['returnstatus'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['fine'] ?></td>
                   <td><a href="addFine.php?id=<?php echo $allIssuedBookDetails[$i]['id']?> ?>">Edit</a></td>
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

      

      