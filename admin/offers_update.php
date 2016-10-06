<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 04-10-2016
 * Time: 11:27 PM
 */

include(__DIR__ . '/../config.php');
$id = $_POST['id'];
$title = $_POST['title'];
$link = $_POST['link'];
$site = $_POST['site'];
$time = $_POST['no_of_times'];
$strtime = $_POST['end_datentime'];
//echo $strtime;
$dtime = date('Y-m-d H:i:s', strtotime($strtime));
//echo $dtime;


$query = "UPDATE offers set title = '$title', link = '$link', site = '$site', end_datentime = '$dtime', no_of_times = '$time' where id = '$id'";
$result = mysqli_query($conn, $query);

echo "Offer with Title - \"" . $title . "\" Updated Successfully";
mysqli_close($conn);
