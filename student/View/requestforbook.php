<?php
$title= "Request for Books";
$javascript = "../Script/requestbook.js";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Request for Books</title>
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
                <?php	include('sideBar.php'); ?>
							</div>

              <div class="dashboard-table">

              <!-- Start Body Code --> 
        <td>
            <fieldset>
                <legend>Request for Books </legend>
              

            <form class="" action="" method="post">
               <table>  
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="STUDENT ID" value="<?php echo $_COOKIE['id']; ?>"> </td>
                </tr>
                <tr>
                    <td>Book Name</td> 
                    <td><input type="text" onkeyup="ajax()" name="name" id="name"> </td>
                </tr>
    
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="Request" value="Request"> 
                    </td>
                </tr>
    
               </table>
    
            </form>
            </fieldset>
            <div id="myh1" class="">
            </div>

        </td>
        
      </tr>

      <!-- End Body Code -->

  </div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>