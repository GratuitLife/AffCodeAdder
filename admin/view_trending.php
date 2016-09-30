<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 30-09-2016
 * Time: 08:45 PM
 */
include 'header.php';
if ($_POST) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $link = $_POST['link'];
    $query = "update trend set title = '$title', link = '$link' where id = '$id'";
    $result = mysqli_query($conn, $query);
}
$query = "select * from trend";
$result = mysqli_query($conn, $query);
?>
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6 center-align">
            <div class="card-panel red lighten-2">Update the edited row Before editing next one</div>
        </div>
    </div>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="row s12">
        <div class="col m1 hide-on-small-only"></div>
        <div class="col s12 m10">
            <form action="view_trending.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="input-field col s12 m4">
                    <input type="text" class="validate" id="title" name="title" value="<?php echo $row['title']; ?>">
                    <label for="title">Title</label>
                </div>
                <div class="input-field col s9 m6">
                    <input type="text" class="validate" id="link" name="link" value="<?php echo $row['link']; ?>">
                    <label for="link">Link (without e33 prefix)</label>
                </div>
                <div class="col s3 m1">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Update</button>
                </div>
            </form>
        </div>
        <div class="col m1 hide-on-small-only"></div>
    </div>

    <?php
}
include 'footer.php';