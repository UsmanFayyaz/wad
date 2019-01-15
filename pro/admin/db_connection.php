<?php
$con = mysqli_connect("localhost","root","","wad");
if(!$con)
    die("Connection failed");



function getcatsz()
{
    global $con;

    $getCatQuery = "select * from categories";

    $getCatResult = mysqli_query($con, $getCatQuery);

    while ($row = mysqli_fetch_assoc($getCatResult)) {
        $title = $row ['c_title'];
        echo "<option>$title</option>";
    }
}
