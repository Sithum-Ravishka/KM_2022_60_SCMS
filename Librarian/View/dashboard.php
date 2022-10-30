<?php $title = "Dashboard";
include_once('../Model/usersmodel.php');
$allnotices = viewAllNotice();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <style>
    <?php include '../Style/dashboard.css'; ?>
  </style>

  <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- fontawesome css -->
</head>

<body>
  <?php include('headerContent.php'); ?>

  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table">

      <table cellspacing="0" width="100%">

            <div id="maincontent">
              <h1>
                <center>NOTICES</center>
              </h1>

              <p></p>
            </div>
            <div id="notice">
              <center>

              <br>
              
                <table border="1">
                  <tr>
                    <th>Serial No.</th>
                    <th>Notice Title</th>
                    <th>Notice Details</th>
                    <th>Time</th>
                  </tr>
                  <?php for ($i = 0; $i < count($allnotices); $i++) { ?>
                    <tr>
                      <td><?php echo $allnotices[$i]['noticeid'] ?></td>
                      <td><?php echo $allnotices[$i]['noticetitle'] ?></td>
                      <td><?php echo $allnotices[$i]['noticedetails'] ?></td>
                      <td><?php echo $allnotices[$i]['time'] ?></td>
                    </tr><?php  } ?>
                </table>
              </center>
            </div>
          </td>
        </tr>
      </table>

    </div>

  </div>
  <?php include('footer1.php'); ?>

</body>

</html>