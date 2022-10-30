<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <style>
        <?php include '../Style/login.css'; ?>
    </style>
    <style media="screen">
        #error_messege {
            color: White;
            font-weight: bold;
            margin-bottom: 20px;
            padding: 0px;
            background: #de0404;
            text-align: center;
            font-size: 18px;
            transition: all 0.5s ease;
        }
    </style>

    <!-- <link rel="stylesheet" href="application_resources/javascripts/plugins/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- fontawesome css -->

    <script src="../Script/adminloginVal.js"></script>
</head>

<body>

    <?php include('header1.php'); ?>


    <div class="containerLogin">

        <div class="loginContent">
            <div class="logImg">
                <img alt="" src="../images/admin-login.png">
            </div>

            <div class="form-body">
              
              <td>
                <form class="" id="myform" action="../Controller/regCheck.php" onsubmit="return validation()" method="post">
                  <fieldset>
                    <legend>REGESTER</legend>
                    <table>
                      <tr>
                        <td colspan="2">
                          <center>
                          <div id="error_messege">
                          </div>
                        </center>
                        </td>
                      </tr>
                      <tr>
                        <td>ID</td>
                        <td>: <input type="text" id="id" name="id" value=""></td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td>: <input type="text" id="name"name="name" placeholder="Enter Full Name"></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>: <input type="email" id="email" name="email" value=""></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>: <input type="password" id="password" name="password" value=""></td>
                      </tr>
                      <tr>
                        <td>Confirm Password</td>
                        <td>: <input type="password" id="repass" name="repass" value=""></td>
                      </tr>
                    </table>
                    <hr>
                    <center>
                      <input type="submit" id="submit" name="signup" value="SIGN UP">
                      <input type="reset" id="reset" name="reset" value="Reset">
                      <a href="adminlogin.php">SIGN IN</a>
                  </center>

                  </fieldset>
                </form>
                </div>
        </div>
    </div>

    <?php include('footer.php'); ?>


</body> 

</html>
  </body>
</html>
