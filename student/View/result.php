<?php
$title= "Result";
include_once('../model/DatabaseConnection.php');
$viewmyresult = getUserbyid($_COOKIE['id']);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Result</title>
    <style>
		<?php include '../Style/result.css'; ?>
	</style>

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
 
        <td>
            <fieldset>
                <legend class="H1">My Result</legend>

                <!-- image Code -->
		      	

            <form class="" action="" method="post"> 
               <table>
               <tr>
                <td>Name</td> 
                <td>:</td>
                <td><?php echo $viewmyresult['name']; ?></td>
               </tr>

               <tr>
                <td>Marks</td> 
                <td>:</td>
                <td><?php echo $viewmyresult['marks']; ?></td>
               </tr>

               </table>

               <div class="logImg1">
                <img alt="" src="../images/gg.jpg">
            </div>
               
            </form>
            </fieldset>
        </td>
      </tr>

         
  </div>

            <div class="logImg">
                <img alt="" src="../images/congr.jpg">
            </div>
         

</div>  

         

<?php include('footer1.php'); ?>

</body>
</html>