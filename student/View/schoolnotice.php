<?php
$title= "School Notice";
require_once('../Model/DatabaseConnection.php');
$noticeList=getAllschoolnotice();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>School Notice</title>
    <style>
		<?php include '../Style/schoolNotice.css'; ?>
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
            <form method="post" action="">
                <fieldset>
                    <legend class="H1">School Notice</legend>
                    
       <!-- image Code -->
       <div class="logImg">
                <img alt="" src="../images/attention.jpg">
            </div>

            <?php
                echo "<table  width='100%' cellspacing = 0  >
                <tr align = 'center'>
                 
                    
                </tr>";
                for($i = 0; $i<count($noticeList); $i++){
                    echo "<tr align = 'center'>
                    <th>{$noticeList[$i]['notice']}</th>
                    <td>(Time: {$noticeList[$i]['time']})</td>
                 
                </tr>";
                }
                echo "</table>";
                ?>
                </fieldset>
            </form>
        </td>
      </tr>
      
          
  </div>

</div>     
<?php include('footer1.php'); ?>

</body>
</html>