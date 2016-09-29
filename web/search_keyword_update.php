<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 29-09-2016
 * Time: 11:32 PM
 */
include(__DIR__ . '/../config.php');
$keyword = $_POST['keyword'];
if (!$keyword) exit;
$query = "SELECT * FROM search WHERE search_keyword = '$keyword'";
$result = mysqli_query($conn, $query);

$mysqltime = date("Y-m-d H:i:s");
echo $mysqltime;
if (mysqli_num_rows($result) > 0) {
    echo "working";
    $query = "UPDATE search set no_of_times = no_of_times + 1, datentime = '$mysqltime' where search_keyword = '$keyword'";
    $result = mysqli_query($conn, $query);
} else {
    $query = "insert into search (search_keyword, no_of_times, datentime) values ('$keyword', 1, '$mysqltime')";
    $result = mysqli_query($conn, $query);
}

mysqli_close($conn);