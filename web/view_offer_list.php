<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 05-10-2016
 * Time: 01:29 PM
 */
include(__DIR__ . '/../config.php');
$now = date("Y-m-d H:i:s");
$query = "select * from offers where end_datentime > '$now' ORDER by id DESC LIMIT 10";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
            if ($row['title']) {
                $time = new DateTime($row['end_datentime']);
                $now = date("Y-m-d H:i:s");
                $now = new DateTime($now);
                $diff = $time->diff($now);

                ?>
                <a href="<?php echo "web\offer_click_update.php?id=" . $row['id'] . "&url=" . $row['link']; ?>"
                   target="_blank"
                   class="collection-item offer<?php echo $row['id']; ?> tooltipped"
                   data-position="bottom" data-delay="50"
                   data-tooltip="<?php echo $row['no_of_times']; ?> times Clicked by Users">
                    <?php echo $row['title']; ?>
                    <span class="new badge blue" data-badge-caption="hrs">
                        <?php echo $diff->d . " days " . $diff->h; ?>
                    </span>
                </a>
            <?php }
        } ?>
        <a href="../offer.php" class="collection-item">Click Here for<span class="badge new red" data-badge-caption="">More Offers With More Details</span></a>
<?php
mysqli_close($conn);