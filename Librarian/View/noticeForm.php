<?php $title = "Add Library Notice";
include('headerContent.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Footer</title>
  <style>
    <?php include '../Style/noticeForm.css'; ?>
  </style>
</head>

<body>
  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table">
      <td id="main content">
        <h2 align="center"><?php echo $title; ?></h2>
        <hr>
        <form action="../Controller/noticeCheck.php" method="POST">
          <table align="center">
            <tr>
              <td>Enter Notice Title :</td>
              <td><input type="text" class="title-notice" name="noticetitle" id="noticetitle" value="">
                <div id="msg1"></div>
              </td>
            </tr>

            <tr>
              <td>Enter Notice Details :</td>
              <td>
                <br>
                <textarea rows="4" cols="50" name="noticedetails" id="noticedetails"></textarea>
                <div id="msg2"></div>
              </td>
            </tr>

            <br>

            <tr>
              <td></td>

              <td>

                <br>

                <input type="submit" class="title-notice-same" name="uploadnotice" value="Post">
                <input type="reset" class="title-notice-same" name="uploadnotice" value="Clear">
              </td>
            </tr>
          </table>
          </fieldset>
        </form>
      </td>
      </tr>
      </table>
    </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html>