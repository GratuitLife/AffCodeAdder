<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 09-10-2016
 * Time: 08:55 PM
 */
include 'header.php';

$query = "SELECT * FROM search ORDER by no_of_times DESC LIMIT 50";
$result = mysqli_query($conn, $query);
?>
    <div class="row">
        <div class="col m2 l3 hide-on-small-only"></div>
        <div class="col s12 m8 l6">
            <table class="highlight bordered striped" id="search-table">
                <thead>
                <tr>
                    <th>keyword ID</th>
                    <th>Search Keyword</th>
                    <th>Times</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['search_keyword']; ?></td>
                        <td><?php echo $row['no_of_times']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col m2 l3 hide-on-small-only"></div>
    </div>
    <script>
        $('#search-table').Tabledit({
            url: 'search_update.php',
            deleteButton: false,
            buttons: {
                edit: {
                    class: 'blue',
                    html: '<i class="material-icons">mode_edit</i>',
                    action: 'edit'
                }
            },

            columns: {
                identifier: [0, 'id'],
                editable: [
//                    [1, 'search_keyword'],
                    [2, 'no_of_times']]
            },
            onSuccess: function (data, textStatus, jqXHR) {
                Materialize.toast("last update Status: " + textStatus, 10000);
                console.log('onSuccess(data, textStatus, jqXHR)');
                console.log(data);
                console.log(textStatus);
                console.log(jqXHR);
            },
            onFail: function (jqXHR, textStatus, errorThrown) {
                Materialize.toast("last update Status: " + textStatus, 10000);
                console.log('onFail(jqXHR, textStatus, errorThrown)');
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },
        });
    </script>
<?php
mysqli_close($conn);
