<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 29-09-2016
 * Time: 11:02 PM
 */

$host = 'localhost';
$username = 'alvistor_e33';
$password = 'sakthi';
$db = 'alvistor_e33db';

//$host = 'localhost';    //
//$username = 'root';     //alvistor_sakthi
//$password = '';         //sakthi
//$db = 'e33db';          //alvistor_e33db

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//echo "db connected";

//don't forget to close the mysql connection using mysqli_close($conn);