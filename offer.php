<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 05-10-2016
 * Time: 05:18 PM
 */
include 'head.php';
include(__DIR__ . '/config.php');

$now = date("Y-m-d H:i:s");
$query = "select * from offers where end_datentime > '$now' ORDER by id DESC LIMIT 100";
$result = mysqli_query($conn, $query);

?>
<div class="row">
    <div class="col m1 hide-on-small-only"></div>
    <div class="col s12 m10">
        <table class="highlight bordered striped">
            <thead>
            <tr>
                <th width="50%">Offer Name</th>
                <th width="25%">Ends in..<a
                        class="btn-floating btn waves-effect waves-light deep-orange darken-3 right"><i
                            class="material-icons">sort_by_alpha</i></a></th>
                <th width="10%">No.of Users Interested<a
                        class="btn-floating btn waves-effect waves-light deep-orange darken-3 right"><i
                            class="material-icons">sort_by_alpha</i></a></th>
                <th width="15%">Site<a class="btn-floating btn waves-effect waves-light deep-orange darken-3 right"><i
                            class="material-icons">sort_by_alpha</i></a></th>
            </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) {
                $time = new DateTime($row['end_datentime']);
                $now = date("Y-m-d H:i:s");
                $now = new DateTime($now);
                $diff = $time->diff($now); ?>
                <tr>
                    <td><a href="<?php echo "web/offer_click_update.php?id=" . $row['id'] . "&url=" . $row['link']; ?>"
                           target="_blank"><?php echo $row['title']; ?></a></td>
                    <td><?php echo $diff->d . " days " . $diff->h . " hours"; ?></td>
                    <td><?php echo $row['no_of_times']; ?></td>
                    <td><?php echo $row['site']; ?></td>
                </tr>
                <?php
            }
            ?></tbody>
        </table>
    </div>
    <div class="col m1 hide-on-small-only"></div>
</div>
<script>
    $(document).ready(function () {
            $("table").tablesorter({
                sortList: [[1, 0]],
                headers: {0: {sorter: false}}
            });
        }
    );
</script>
<style>
    th, th.header {
        background: #ffab40;
    }

    th.headerSortUp {
        background: #ff9100;
    }

    th.headerSortDown {
        background: #ff6d00;
    }
</style>