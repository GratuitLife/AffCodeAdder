<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 09-10-2016
 * Time: 08:55 PM
 */
include 'header.php';

$query = "SELECT * FROM sites";
$result = mysqli_query($conn, $query);
?>
    <h4>Press Enter to Update....Beware.. You Can't UNDO</h4>
    <div class="row">
        <div class="col s12">
            <table class="highlight bordered striped" id="search-table">
                <thead>
                <tr>
                    <th width="20px">ID</th>
                    <th width="70px">Site</th>
                    <th width="70px">Image</th>
                    <th width="100%">Category</th>
                    <th width="80px">URL</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['img']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['url']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $('#search-table').Tabledit({
            url: 'sites_update.php',
            deleteButton: false,
            hideIdentifier: false,
            saveButton: false,
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
                    [1, 'name'],
                    [2, 'img'],
                    [3, 'category'],
                    [4, 'url']
                ]
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
