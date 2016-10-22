<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 09-10-2016
 * Time: 09:15 PM
 */

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);
$times = $input['no_of_times'];
$id = $input['id'];

include(__DIR__ . '/../config.php');

if ($input['action'] == 'edit') {
    $query = "UPDATE search SET no_of_times='$times' WHERE id='$id'";
}
$result = mysqli_query($conn, $query);
mysqli_close($conn);

echo json_encode($input);