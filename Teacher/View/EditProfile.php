<?php

    require_once('../Model/DatabaseConnection.php');
    $User = getUserById($_COOKIE['ID']);
	if(isset($_COOKIE['flag']))
	{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Notice</title>
    <style>
    <?php include '../Style/dashboard.css';
    ?>
    </style>


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
                        <center>Edit Teacher Profile</center>
                    </h1>

                    <br>
                </div>
                <td height="150px" weight="150px">


                </td>
                <td>
                    <fieldset>

                        <form class="" id="EditProfile" action="../Controller/EditCheck.php" method="post"
                            onsubmit="return EditProfile()">

                            <table>
                                <tr>
                                    <td>ID</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<input type="text" id="id" name="ID" disabled
                                            value="<?php echo $User['id']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<input type="text" id="uname" name="uname"
                                            value="<?php echo $User['name']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<input type="email" id="email" name="email"
                                            value="<?php echo $User['email']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mobile No.</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<input type="text" id="mobile" name="mobile"
                                            value="<?php echo $User['mobile']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<input type="radio" name="gender"
                                            <?php  if($User['gender']=="male"){?> checked="true" <?php } ?>
                                            value="male">Male
                                        &nbsp &nbsp

                                        <input type="radio" id="gender" name="gender"
                                            <?php if($User['gender']=="female"){?> checked="true" <?php } ?>
                                            value="female">Female

                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>&nbsp &nbsp:&nbsp &nbsp<input type="date" id="dob" name="dob"
                                            value="<?php echo $User['dob']; ?>">
                                    </td>
                                </tr>

                            </table>
                            <hr>
                            <input type="submit" name="submit" value="Edit">
                            <center>
                                <div id="error_messege">
                                </div>
                            </center>


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

}else{
header('location: LoginPage.php');
}

?>