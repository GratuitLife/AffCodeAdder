<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 05-10-2016
 * Time: 12:19 PM
 */
include(__DIR__ . '/../config.php');
$title = $_POST['title'];
$link = $_POST['link'];
$site = $_POST['site'];
$strtime = $_POST['end_datentime'];
//echo $strtime;
$dtime = date('Y-m-d H:i:s', strtotime($strtime));
//echo $dtime;


$query = "INSERT INTO `offers`(`title`, `link`, `site`, `end_datentime`, `no_of_times`) VALUES ('$title','$link','$site','$dtime',0)";
$result = mysqli_query($conn, $query);

echo "Offer added Successfully";
header("Location: view_offers.php");
mysqli_close($conn);