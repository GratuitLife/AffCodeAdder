<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 22-10-2016
 * Time: 09:58 PM
 */

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);
$id = $input['id'];
$name = $input['name'];
$img = $input['img'];
$category = $input['category'];
$url = $input['url'];

include(__DIR__ . '/../config.php');

if ($input['action'] == 'edit') {
    $query = "UPDATE sites SET name='$name', img='$img', category='$category', url='$url' WHERE id='$id'";
}
$result = mysqli_query($conn, $query);
mysqli_close($conn);

echo json_encode($input);