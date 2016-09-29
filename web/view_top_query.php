<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 29-09-2016
 * Time: 11:02 PM
 */
include(__DIR__ . '/../config.php');

$query = "SELECT * FROM search ORDER by no_of_times DESC LIMIT 10";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<a href=\"#!\" class=\"collection-item query-list-item\">" . $row["search_keyword"] . "<span class=\"badge\" data-badge-caption=\"times searched\">" . $row["no_of_times"] . "</span></a>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);