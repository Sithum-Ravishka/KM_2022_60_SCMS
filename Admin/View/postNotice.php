<?php
	$title= "notice";
	$js = "../Script/noticeVal.js";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
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
                <?php	include('SidebarNotice.php'); ?>
							</div>

              <div class="dashboard-table">
   

              <td>
                <form  class="" id="inform" action="../Controller/postCheckNotice.php" onsubmit="return validation()" method="post">
                  <fieldset >
                    <legend>Notice</legend>
                      <table align="center">
												<tr>
													<td colspan="2">
														<center>
														<div id="error_messege">
														</div>
													</center>
												</tr>
                        
                        <tr>
                          <td>
                            <textarea id="notice" name="notice" rows="8" cols="80" placeholder="Enter notice Here"></textarea>
                          </td>
                        </tr>
                      </table>
                      <hr>
                      <center>
                        <input type="submit" name="submit" value="POST">
                    </center>
                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>



      </div>
	  </div>     
<?php include('footer.php'); ?>

</body>
</html>
