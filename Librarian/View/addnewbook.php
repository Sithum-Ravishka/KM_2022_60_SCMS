<?php $title = "Add New Book";
include('headerContent.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Add New Book</title>
    <style>
        <?php include '../Style/addnewbook.css'; ?>
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
                <div class="title">
                    <h2>Add New Book</h2>
                </div>

                <br>

                <div class="form-set">
                    <div class="form-group">
                        <label for="exampleInputName">Enter ISBN : </label>
                        <input type="text" name="isbn" id="isbn" value="">
                    </div>

                    <div class="form-right">
                        <div class="form-group">
                            <label for="exampleInputName">Enter Title : </label>
                            <input type="text" name="booktitle" id="booktitle" value="">
                        </div>
                    </div>
                </div>

                <div class="form-set">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select Categories : </label>
                        <select name="categories" id="categories" >
                            <option value="mystery">Mystery</option>
                            <option value="thriller">Thriller</option>
                            <option value="fantasy">Fantasy</option>
                        </select>

                    </div>
                    <div class="form-right">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Author : </label>
                            <input type="text" name="author" id="author" value="">

                        </div>
                    </div>
                </div>

                <div class="form-set">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Book Copy : </label>
                        <input type="text" name="bookcopy" id="bookcopy" value="" >
                    </div>

                    <div class="form-right">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter Edition :</label>
                            <input type="text" name="edition" id="edition" value="" >
                        </div>
                    </div>
                </div>
                <div class="form-set">
                    <div class="form-group">
                        <label for="exampleInputName">Upload Book : </label>
                        <input type="file" name="bookfile" id="bookfile" value="" >
                    </div>

                </div>
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