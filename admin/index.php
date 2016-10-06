<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 30-09-2016
 * Time: 04:23 PM
 */

include 'header.php';
?>
    <div class="row">
        <div class="col m1 hide-on-small-only"></div>
        <div class="col s12 m10">
            <?php echo "hi " . $_SESSION['user'] . ", You are logged in as " . $_SESSION['role']; ?>
        </div>
        <div class="col m1 hide-on-small-only"></div>
    </div>
<?php


include 'footer.php';