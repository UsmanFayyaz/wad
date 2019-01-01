<?php
require "db_connection.php";

function getcats()
{
    global $con;

    $getCatQuery = "select * from categories";

    $getCatResult = mysqli_query($con, $getCatQuery);

    while ($row = mysqli_fetch_assoc($getCatResult)) {
        $title = $row ['c_title'];
        echo "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}

function getbrands()
{
    global $con;

    $getbrdQuery = "select * from brands";

    $getbrdResult = mysqli_query($con, $getbrdQuery);

    while ($row = mysqli_fetch_assoc($getbrdResult)) {
        $title = $row ['b_title'];
        echo "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}