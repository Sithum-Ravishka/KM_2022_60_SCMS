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
                <form class="" id="inform" action="../Controller/logCheck.php" onsubmit="return validation()" method="post">

                    <div class="logTitle">
                        <span>Admin Login</span>
                    </div>


                    <br> <span class="logSubTitle">Login here using your Admin ID and Password</span>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admin ID</label> <input type="text" id="id" name="id" value="" class="form-control" aria-describedby="emailHelp" placeholder="Enter Your Admin ID" required="required"> <small id="emailHelp" class="form-text text-muted">Don't share
                            your <span class="smMsg">Admin ID and Password</span> with
                            anyone else.
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label> <input type="password" id="password" name="password" value="" class="form-control" placeholder="Enter Your Password" required="required">
                    </div>

                    <br>
                    <button type="submit" id="submit" name="submit" value="LOGIN" class="loginBtn">LOGIN</button>


                </form>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>


</body>

</html>