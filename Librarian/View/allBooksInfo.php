<?php 
$title= "View All Book";
include_once('../Model/usersmodel.php');
include('headerContent.php');
$booksinfo = getAllBooksInfo();
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

       <h2 align="center" ><?php echo $title; ?></h2>
                    
<script type="text/javascript" src="../js/booksearch.js"></script>
<input type="text" name="title" id="title" onkeyup="ajax()" />
	<input type="button" name="" value="Search">
    <br>
    <div id="myh1">
      <div id="notice">
    <table border="1">
        <tr>
            <th>Serial No.</th>
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Categories</th>
            <th>Book Item No.</th>
            <th>Action</th>
        </tr>
        <?php  for($i=0; $i < count($booksinfo); $i++){ ?>
         <tr>
             <td><?php echo $booksinfo[$i]['sl'] ?></td>
             <td><?php echo $booksinfo[$i]['isbn'] ?></td>
             <td><?php echo $booksinfo[$i]['title'] ?></td>
             <td><?php echo $booksinfo[$i]['author'] ?></td>
             <td><?php echo $booksinfo[$i]['edition'] ?></td>
             <td><?php echo $booksinfo[$i]['categories'] ?></td>
             <td><?php echo $booksinfo[$i]['bookcopy'] ?></td>
             <td>
                  <button><a href="viewBookInfo.php?serialno=<?php echo $booksinfo[$i]['sl']; ?>">View</a></button> |
                  <button><a href="editBookInfo.php?serialno=<?php echo $booksinfo[$i]['sl']; ?>">Update</a></button> |
                  <button><a href="deleteBookInfo.php?serialno=<?php echo $booksinfo[$i]['sl']; ?>">Delete</a></button>
             </td>
         </tr><?php  } ?></div>
             </table>
            </div>
         </div>

    </div>

  </div>
  <?php include('footer1.php'); ?>

</body>

</html>
 