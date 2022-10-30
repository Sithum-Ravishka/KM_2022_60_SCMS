<?php $title= "Search Book";
include('headerContent.php');
   ?> 

<!DOCTYPE html>
                <html lang="en" dir="ltr">

                <head>
                    <meta charset="utf-8">
                    <title>Footer</title>
                    <style>
                        <?php include '../Style/searchBookCheck.css'; ?>
                    </style>
                </head>

                <body>
                    <div class="dashboard-content">
                        <div class="dashboard-sidebar">
                            <?php include('Sidebar.php'); ?>
                        </div>

                        <div class="dashboard-table">

<?php
include_once('../Model/usersmodel.php');


if (isset($_POST['searchbook'])) {
    $isbnno = $_POST['isbnno'];
    if ($isbnno == "") {
        echo "please, enter ISBN Number*";
    } else {
        if ($isbnno == getISBN($isbnno)) {
            $getbookinfo = searchBookInfo($isbnno); ?>

            <br>          
<div class="title">
    <h2><?php echo $title; ?></h2>
</div>
            <br>

            <table align="center" border="1">
                            <tr>
                                <th>ISBN</th>
                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Edition</th>
                                <th>Categories</th>
                                <th>Available Bookcopy</th>
                                <th>Request For Book</th>
                            </tr>
                            <tr>
                                <td><?php echo $getbookinfo['isbn']; ?></td>
                                <td><?php echo $getbookinfo['title']; ?></td>
                                <td><?php echo $getbookinfo['author']; ?></td>
                                <td><?php echo $getbookinfo['edition']; ?></td>
                                <td><?php echo $getbookinfo['categories']; ?></td>
                                <td><?php echo $getbookinfo['bookcopy']; ?></td>
                                <td><a href="../View/requestBookInfo.php">Send Request</a></td>
                            </tr>
                <?php
            } else {
                echo "This Book is unavailable";
            }
        }
    } else {
        echo "invalid Request!";
    }
                ?>