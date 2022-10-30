<?php $title = "Add New Book";
include('headerContent.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <script>
        function addNewBook() {
            var Isbn = document.getElementById('isbn').value;
            var Booktitle = document.getElementById('booktitle').value;
            var Categories = document.getElementById('categories').value;
            var Author = document.getElementById('author').value;
            var Bookcopy = document.getElementById('bookcopy').value;
            var Edition = document.getElementById('edition').value;
            var Bookfile = document.getElementById('bookfile').value;
            var msg = "";

            if (Isbn == "") {
                msg += "please fill up ISBN";
                isbn.className = "error";
            }
            if (Booktitle == "") {
                msg += "enter booktitle";
                booktitle.className = "error";
            }
            if (Categories == "") {
                msg += "select categories";
                categories.className = "error";
            }
            if (Author == "") {
                msg += "write author name";
                author.className = "error";
            }
            if (Bookcopy == "") {
                msg += "enter bookcopy no";
                bookcopy.className = "error";
            }
            if (Edition == "") {
                msg += "please fill up edition field";
                edition.className = "error";
            }
            if (Bookfile == "") {
                msg += "upload bookfile";
                bookfile.className = "error";
            }
            if (msg == "") {
                return true;
            } else {
                document.getElementById('msg1').innerHTML = "please fill up the isbn";
                document.getElementById('msg2').innerHTML = "enter booktitle";
                document.getElementById('msg3').innerHTML = "select categories";
                document.getElementById('msg4').innerHTML = "write author name";
                document.getElementById('msg5').innerHTML = "enter bookcopy no";
                document.getElementById('msg6').innerHTML = "please upload bookfile";
                document.getElementById('msg7').innerHTML = "upload bookfile";
                return false;

            }
        }

        function validation() {
            var Isbn = document.getElementById('isbn').value;
            var Booktitle = document.getElementById('booktitle').value;
            var Categories = document.getElementById('categories').value;
            var Author = document.getElementById('author').value;
            var Bookcopy = document.getElementById('bookcopy').value;
            var Edition = document.getElementById('edition').value;
            var Bookfile = document.getElementById('bookfile').value;
            if (Isbn != "" && Isbn.length == 9) {
                document.getElementById('msg1').innerHTML = "";
                document.getElementById('isbn').className = "success";
            }
            if (Booktitle != "" && Booktitle.length >= 12) {
                document.getElementById('msg2').innerHTML = "";
                document.getElementById('booktitle').className = "success";
            }
            if (Categories != "") {
                document.getElementById('msg7').innerHTML = "";
                document.getElementById('categories').className = "success";
            }
            if (Author != "") {
                document.getElementById('msg3').innerHTML = "";
                document.getElementById('author').className = "success";
            }
            if (Bookcopy != "") {
                Author
                document.getElementById('msg4').innerHTML = "";
                document.getElementById('bookcopy').className = "success";
            }
            if (Edition != "") {
                document.getElementById('msg5').innerHTML = "";
                document.getElementById('edition').className = "success";
            }
            if (Bookfile != "") {
                document.getElementById('msg6').innerHTML = "";
                document.getElementById('booktitle').className = "success";
            }


        }
    </script>
    <meta charset="utf-8">
    <title>Footer</title>
    <style>
        <?php include '../Style/dashboard.css'; ?>
    </style>

</head>

<body>

    <div class="dashboard-content">
        <div class="dashboard-sidebar">
            <?php include('Sidebar.php'); ?>
        </div>

        <div class="dashboard-table">
            <form action="../Controller/bookInfoCheck.php" method="post" onsubmit="return addNewBook()" enctype="multipart/form-data">

            <br>

            <center><h2>Add New Book</h2></center>
            
            <br>
            
                <table align="center">
                    <tr>
                        <td>Enter ISBN :</td>
                        <td><input type="text" name="isbn" id="isbn" value="" onkeypress="validation()">
                            <div id="msg1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Title :</td>
                        <td><input type="text" name="booktitle" id="booktitle" value="" onkeypress="validation()">
                            <div id="msg2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Select Categories :</td>
                        <td>
                            <select name="categories" id="categories" onkeypress="validation()">
                                <option value="mystery">Mystery</option>
                                <option value="thriller">Thriller</option>
                                <option value="fantasy">Fantasy</option>
                            </select>
                            <div id="msg3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Author :</td>
                        <td><input type="text" name="author" id="author" value="" onkeypress="validation()">
                            <div id="msg4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Book Copy :</td>
                        <td><input type="text" name="bookcopy" id="bookcopy" value="" onkeypress="validation()">
                            <div id="msg5"></div>
                        </td>
                    </tr>

                    <tr>
                        <td>Enter Edition :</td>
                        <td><input type="text" name="edition" id="edition" value="" onkeypress="validation()">
                            <div id="msg6"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Upload Book :</td>
                        <td><input type="file" name="bookfile" id="bookfile" value="" onkeypress="validation()">
                            <div id="msg7"></div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="lol"><input type="submit" name="addnewbook" value="Add New Book">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
            </td>
            </tr>
        </div>

    </div>
    <?php include('footer1.php'); ?>

</body>

</html>