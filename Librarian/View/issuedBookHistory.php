<?php $title= "Issued Books";
include('headerContent.php');
  include_once('../Model/usersmodel.php');
  $allIssuedBookDetails = viewIssuedBookDetails();
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Issued Books</title>
  <style>
    <?php include '../Style/issuedBookHistory.css'; ?>
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
          <form action="../Controller/" method="post">
          <div id="notice" >
          <table align="center" border="1">
                    <tr>
                      <th>Serial No</th>
                      <th>ISBN</th>
                      <th>Book Title</th>
                      <th>Student Id</th>
                      <th>Issued Date</th>
                    </tr>
                    <tr>

                  <?php  for($i=0; $i < count($allIssuedBookDetails); $i++){ ?>
                 <tr>
                   <td><?php echo $allIssuedBookDetails[$i]['serialno'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['isbn'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['title'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['id'] ?></td>
                   <td><?php echo $allIssuedBookDetails[$i]['issuesdate'] ?></td>
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

      

      