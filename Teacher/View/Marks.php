<?php

  require_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
	$User =  getStudentById($Id);
  $_SESSION['id'] = $Id;
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Upload Marks</title>
    <style>
    <?php include '../Style/dashboard.css';
    ?>
    </style>


</head>

<body>
    <?php	include('headerContent.php'); ?>

    <div class="dashboard-content">
        <div class="dashboard-sidebar">
            <?php	include('SidebarNew.php'); ?>
        </div>

        <div class="dashboard-table">
            <tr>
            <tr>
                <td align="Left"><img height="80px" weight="80px" src="../Resources/grades.svg" alt=""></td>
                <td align="Center">
                    <b>
                        Marks Upload
                    </b>
                </td>
            </tr>
            <td height="150px" weight="150px">


            </td>
            <td>
                <fieldset>

                    <form class="" id="MarksUpload" action="../Controller/MarksCheck.php" method="post"
                        onsubmit="return Marks()">
                        <table align="center">
                            <tr>
                                <td>ID</td>
                                <td>:<input type="number" id="id" name="ID" disabled value="<?php echo $User['id']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>:<input type="text" id="name" name="name" disabled
                                        value="<?php echo $User['name']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Class</td>
                                <td>:<input type="text" id="class" name="class" disabled
                                        value="<?php echo $User['class']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Roll</td>
                                <td>:<input type="number" id="roll" name="roll" disabled
                                        value="<?php echo $User['roll']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Update Marks</td>
                                <td>
                                    :<input type="text" id="marks" name="marks" value="<?php echo $User['marks']; ?>">
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <center>
                            <input type="submit" name="upload" value="Submit">
                        </center>
                        <center>
                            <div id="error_messege">
                            </div>
                        </center>
                    </form>
                </fieldset>
            </td>
        </div>

    </div>
    <?php include('footer1.php'); ?>

</body>

</html>
<?php

}else{
header('location: LoginPage.php');
}

?>