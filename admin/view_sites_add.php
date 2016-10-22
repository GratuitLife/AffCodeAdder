<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 22-10-2016
 * Time: 11:29 PM
 */

include 'header.php';
if ($_POST) {
    $name = $_POST['site_name'];
    $url = $_POST['url'];
    $query = "insert into `sites` (`name`,`img`,`url`) values ('$name', '$name', '$url')";
    $result = mysqli_query($conn, $query);
    ?>
    <h4>The Site is added... Continue editing the site data in <a href="view_sites.php">Site List</a></h4>
    <?php
    mysqli_close($conn);
}
?>
<form action="view_sites_add.php" method="post">
    <h4>Add New Offer</h4>
    <div class="row s12">
        <div class="col m1 hide-on-small-only"></div>
        <div class="col m10">
            <div class="row m12">
                <div class="input-field col s12"><input type="text" name="site_name" autocomplete="off">
                    <label for="">Name of the Site</label>
                </div>
                <div class="input-field col s12"><input type="text" name="url" autocomplete="off">
                    <label for="">URL w/o e33 prefix</label>
                </div>
                <div class="col s12 center-align">
                    <button class="btn waves-effect waves-light" type="submit">Add Site To List</button>
                </div>
            </div>
        </div>
        <div class="col m1 hide-on-small-only"></div>
    </div>
</form>
