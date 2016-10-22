<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 22-10-2016
 * Time: 09:24 PM
 */

include(__DIR__ . '/../config.php');

$query = "select * from sites"; //id, name, img, category, url
$result = mysqli_query($conn, $query);
?>
<ul class="list row"><!--class 'list' to notify list.js to search-->
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <li class="col s12 m6">
            <div class="list-title"><a href="http://e33.in/?<?php echo $row['url']; ?>">
                    <i class="site site-<?php echo $row['img']; ?>"></i><span
                        class="name"> <?php echo $row['name']; ?></span></a></div>
            <p class="category truncate"><?php echo $row['category']; ?></p>
        </li>
    <?php }
    ?>
</ul>