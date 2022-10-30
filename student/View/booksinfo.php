<?php
$title= "Book Information";
$javascript = "../Script/bookSearch.js";
require_once('../Model/DatabaseConnection.php');
$bookList=getAllbook();
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book Information</title>
    <style>
		<?php include '../Style/booksinfo.css'; ?>
	</style>

 <!-- Search-->
 <script src="<?=$javascript?>"></script>

     <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- fontawesome css -->
  </head>
  <body>
<?php	include('headerContent.php'); ?>

<div class="dashboard-content">
							<div class="dashboard-sidebar">
                <?php	include('sideBar.php'); ?>
							</div>

              <div class="dashboard-table">

              <!-- Start Body Code --> 

        <td>
            <center><h2 class="H1">Book Information</h2></center>
            <div class="send">
                  <b class="scr">Find Book:</b><input type="text" onkeyup="ajax()" name="name" id="name">
                  <div class="sch"> <input type="button" name="" value="Find"></div>
            </div>
          <div id="myh1" class="">
                  <br>
            <?php
                echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <th>ISBN</th>
                    <th>TITLE</th>
                    <th>AUTHOR</th>
                    <th>EDTION</th>
                </tr>";
                for($i = 0; $i<count($bookList); $i++){
                    echo "<tr align = 'center'>
                    <td>{$bookList[$i]['isbn']}</td>
                    <td>{$bookList[$i]['title']}</td>
                    <td>{$bookList[$i]['author']}</td>
                    <td>{$bookList[$i]['edition']}</td>
                </tr>";
                }
                echo "</table>";
                ?>
                </div>
       
      </tr>

       <!-- image Code -->
       <div class="logImg">
                <img alt="" src="../images/book.jpeg">
            </div>
       <!-- End Body Code -->

  </div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>
      