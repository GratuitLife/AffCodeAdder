<?php
/**
 * Template for other pages
 * User: Sakthi
 * Date: 30-09-2016
 * Time: 04:24 PM
 */

include 'header.php';
echo "welcome";

//run query
$query = "SELECT * FROM search WHERE search_keyword = '$keyword'";
$query = "UPDATE search set no_of_times = no_of_times + 1, datentime = '$mysqltime' where search_keyword = '$keyword'";
$query = "insert into search (search_keyword, no_of_times, datentime) values ('$keyword', 1, '$mysqltime')";

//taking output row
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "" . $row["search_keyword"] . "";
    }
} else {
    echo "0 results";
}

// close connection of db
mysqli_close($conn);


include 'footer.php';