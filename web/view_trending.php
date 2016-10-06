<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 01-10-2016
 * Time: 11:22 PM
 */
include(__DIR__ . '/../config.php');

$query = "select * from trend";
$result = mysqli_query($conn, $query);
?>
    <div class="collection">
        <?php while ($row = mysqli_fetch_assoc($result)) {
            if ($row['title']) {
                ?>
                <a href="<?php echo "http://e33.in/?" . $row['link']; ?>" target="_blank"
                   class="collection-item trending"><?php echo $row['title']; ?><span class="badge new"
                                                                                      data-badge-caption="">new</span></a>
            <?php }
        } ?>
    </div>
<?php
mysqli_close($conn);