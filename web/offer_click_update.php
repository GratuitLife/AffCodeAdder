<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 05-10-2016
 * Time: 01:38 PM
 */
include(__DIR__ . '/../config.php');

$id = $_GET['id'];
$url = $_GET['url'];

$query = "UPDATE offers set no_of_times = no_of_times + 1 where id = '$id'";
$result = mysqli_query($conn, $query);

mysqli_close($conn);

$url = "http://e33.in/?" . $url;
header("Location: $url");
