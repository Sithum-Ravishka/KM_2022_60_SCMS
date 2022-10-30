<?php $title= "Update Book Info";
include('headerContent.php');
include_once('../Model/usersmodel.php');
$serialno = $_GET['serialno'];
$updateBookInfo = viewBookInfo($serialno);
$_SESSION['serialno'] = $serialno;
   ?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Book Info</title>
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

    <h2><?php echo $title; ?></h2>

          <form action="../Controller/updateBookInfoCheck.php" method="POST">
          <table align="center">
                    <tr>
                        <td>Enter ISBN :</td>
                        <td><input type="text" name="isbn" disabled value="<?php echo $updateBookInfo['isbn']; ?>" ></td>
                    </tr>
                    <tr>
                        <td>Enter Title :</td>
                        <td><input type="text" name="booktitle" value="<?php echo $updateBookInfo['title']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Select Categories :</td>
                        <td>
                         <select name="categories" id="categories">
                            <option value="mystery">Mystery</option>
                            <option value="thriller">Thriller</option>
                            <option value="fantasy">Fantasy</option>
                         </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Author :</td>
                        <td><input type="text" name="author" value="<?php echo $updateBookInfo['author']; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Enter Edition :</td>
                        <td><input type="text" name="edition" value="<?php echo $updateBookInfo['edition']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Book Copy :</td>
                        <td><input type="text" name="bookcopy" value="<?php echo $updateBookInfo['bookcopy']; ?>"></td>
                    </tr>
                    <!-- <tr>
                      <td>Upload Book :</td>
                      <td><input type="file" name="bookfile" value="<?php echo $updateBookInfo['bookfile']; ?>"></td>
                    </tr> -->
                    <tr>
                        <td></td>
                        <td><input type="submit" name="updatebookinfo" value="Update Book Info">
                        </td>
                    </tr>
             </table>
            </fieldset>
          </form>
        </td>
      </tr>

      </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html>   