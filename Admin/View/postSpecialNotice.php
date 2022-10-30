<?php
	$title= "notice";
	$js = "../Script/noticeVal.js";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
            <fieldset>
                <form class="" name="Upload" action="../Controller/UploadNotesCheck.php" method="post" enctype="multipart/form-data" onsubmit="return FileUpload()">
                    <fieldset>
                      <legend>Upload Notes</legend>
                      <input type="file" name="photo"><br>
                      <hr>
                      <input type="submit" name="submit" value="submit">
                      <a href="ViewUploadedNotes(Teacher).php"> View Uploaded Notes</a>
                      <center>
                         <div id="error_messege">
                         </div>
                      </center>
                    </fieldset>
              
                  </form>
            </fieldset>
        </td>
      </tr>

      </div>
	  </div>     
<?php include('footer.php'); ?>

    </table>

  </body>
</html>
