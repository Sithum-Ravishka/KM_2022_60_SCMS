<?php
	
  require_once('../Model/DatabaseConnection.php');
  $User = getUserById($_COOKIE['ID']);
	$MarksList = getAllUser();
	if(isset($_COOKIE['flag']))
	{
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Marks List</title>
    <style>
    <?php include '../Style/dashboard.css';
    ?>
    </style>


    <script src="<?=$javascript?>"></script>

</head>

<body>
    <?php	include('headerContent.php'); ?>

    <div class="dashboard-content">
        <div class="dashboard-sidebar">
            <?php	include('Sidebar.php'); ?>
        </div>

        <div class="dashboard-table">
            <tr>
                <div id="maincontent">
                    <h1>
                        <center>Student Marks</center>
                    </h1>


                </div>
                <br><br>

                <td>
                    <fieldset>

                        <form class="" action="" method="post">
                            <center>
                                <input type="text" name="name" id="name" placeholder="Find Students Marks">
                                <input type="button" name="" value="Find" onclick="ajax()">
                            </center>
                            <div id="myh1" class="">
                                <br>
                                <?php
								echo 
                                "<table border = 5 width='250%' cellspacing = 60  >
								<tr align = 'center'>
								    <td>ID</td>
								    <td>Name</td>
                    <td>Subject</td>
                    <td>Roll</td>
                    <td>Marks</td>
								    <td>Marks Update</td>
                    <td>Marks Delete</td>
								</tr>";
								for($i = 0; $i<count($MarksList); $i++){
								    echo "<tr align = 'center'>
								    <td>{$MarksList[$i]['id']}</td>
								    <td>{$MarksList[$i]['name']}</td>
                    <td>{$User['subject']}</td>
                    <td>{$MarksList[$i]['roll']}</td>
                    <td>{$MarksList[$i]['marks']}</td>
								    <td> <a href='Marks.php?id={$MarksList[$i]['id']}'> Update </a></td>
                    <td> <a href='DeleteMarks.php?id={$MarksList[$i]['id']}'> Delete </a> </td>
								</tr>";
								}
								echo "</table>";?>
                            </div>
                        </form>
                    </fieldset>
                </td>
            </tr>
        </div>

    </div>
    <?php include('footer1.php'); ?>

</body>

</html>
<?php

}
else{
header('location: LoginPage.php');
}

?>