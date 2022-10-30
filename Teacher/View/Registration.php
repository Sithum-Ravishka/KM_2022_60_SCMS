<!DOCTYPE html>
<html>

<head>
    <title>TeacherReg</title>
    <style media="screen">
    #error_messege {
        color: blue;
        font-weight: bold;
    }
    </style>
    <script src="../Script/RegCheck(script).js"></script>
</head>

<body>


    <body>
        <br>

        <div id="maincontent">
            <h1>
                <center>Registration</center>
            </h1>


        </div>
        <br>
        <table align="center">
            <tr>

                <td>
                    <form method="post" id="RegistrationForm" action="../Controller/RegCheck.php"
                        onsubmit="return Registration()">
                        <fieldset width="5px">

                            <table width="100.7%" height="100px" align="center">

                                <tr>
                                    <td width="30%" height="30px">Name</td>
                                    <td width="60%" height="30px">&nbsp &nbsp:&nbsp &nbsp<input type="text" id="uname"
                                            name="uname" value="">
                                    </td>
                                </tr>

                                <tr>
                                    <td width="30%" height="30px">Email</td>
                                    <td width="60%" height="30px">&nbsp &nbsp:&nbsp &nbsp<input type="email" id="email"
                                            name="email" value="">
                                    </td>
                                </tr>

                                <tr>
                                    <td width="30%" height="30px">Mobile No.</td>
                                    <td width="60%" height="30px">&nbsp &nbsp:&nbsp &nbsp<input type="text" id="mobile"
                                            name="mobile" value=""></td>
                                </tr>

                                <tr>
                                    <td width="30%" height="30px">ID</td>
                                    <td width="60%" height="30px">&nbsp &nbsp:&nbsp &nbsp<input type="text" id="id"
                                            name="ID" value=""></td>
                                </tr>

                                <tr>
                                    <td width="30%" height="30px">Password</td>
                                    <td width="60%" height="30px">&nbsp &nbsp:&nbsp &nbsp<input type="password"
                                            id="password" name="password">
                                    </td>
                                </tr>

                                <tr>
                                    <td width="30%" height="30px">Confirm Password</td>
                                    <td width="60%" height="30px">&nbsp &nbsp:&nbsp &nbsp<input type="password"
                                            id="repass" name="confirm">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" id="gender" name="gender" value="male">Male
                                            <input type="radio" id="gender" name="gender" value="female">Female

                                        </fieldset>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" id="dob" name="dob" value="">
                                        </fieldset>
                                    </td>
                                </tr>

                                <tr>
                                    <td height="30px" align="center" colspan="3"><input type="submit" name="submit"
                                            value="Submit">
                                        &nbsp &nbsp &nbsp &nbsp
                                        <input type="reset" name="reset" value="Reset">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <center>
                                            <div id="error_messege">
                                            </div>
                                        </center>
                                    </td>
                                </tr>

                            </table>
                        </fieldset>
                    </form>
                </td>
                <td></td>
            </tr>
        </table>
    </body>

</html>


</body>

</html>