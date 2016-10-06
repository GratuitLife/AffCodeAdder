<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 04-10-2016
 * Time: 09:21 PM
 */

include 'header.php';
$now = date("Y-m-d H:i:s");
$query = "select * from offers where end_datentime > '$now' ORDER by id DESC LIMIT 30";
$result = mysqli_query($conn, $query);
?>
    <!--<div class="row s12 m10 push-m2">-->
<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="row s12">
        <div class="col m1 hide-on-small-only"></div>
        <div id="<?php echo $row['id']; ?>" class="col m10">
            <div class="row m12 cell">
                <div class="input-field col s12 m4"><input type="text" name="title" id="title<?php echo $row['id']; ?>"
                                                           value="<?php echo $row['title']; ?>">
                    <label for="" class="active">Title of the Offer</label>
                </div>
                <div class="input-field col s12 m6"><input type="text" id="link<?php echo $row['id']; ?>"
                                                           value="<?php echo $row['link']; ?>">
                    <label for="" class="active">Link (without e33 Prefix</label>
                </div>
                <div class="input-field col s12 m2"><input type="text" id="site<?php echo $row['id']; ?>"
                                                           value="<?php echo $row['site']; ?>">
                    <label for="" class="active">Site eg: amazon, flipkart, yepme, myntra</label>
                </div>
                <div class="input-field col s12 m4"><input type="text" class="dtpicker"
                                                           id="end_datentime<?php echo $row['id']; ?>"
                                                           value="<?php echo $row['end_datentime']; ?>">
                    <label for="" class="active">End Date : <?php echo $row['end_datentime']; ?></label>
                </div>
                <div class="input-field col s12 m4"><input type="text" id="times<?php echo $row['id']; ?>"
                                                           value="<?php echo $row['no_of_times']; ?>">
                    <label for="" class="active">Number of times this link is clicked</label>
                </div>
                <div class="col s12 m4">
                    <button class="btn waves-effect waves-light" onclick="update(<?php echo $row['id']; ?>)">Update
                    </button>
                </div>
            </div>
        </div>
        <div class="col m1 hide-on-small-only"></div>
    </div>
<?php } ?>
    <div id="addOffer" class="modal modal-fixed-footer">

        <div class="modal-content">
            <form action="offers_add.php" method="post">
                <h4>Add New Offer</h4>
                <div class="row s12">
                    <div class="col m1 hide-on-small-only"></div>
                    <div class="col m10">
                        <div class="row m12">
                            <div class="input-field col s12 m5"><input type="text" name="title" autocomplete="off">
                                <label for="">Offer Title</label>
                            </div>
                            <div class="input-field col s12 m7"><input type="text" name="link" autocomplete="off">
                                <label for="">Link w/o e33 prefix)</label>
                            </div>
                            <div class="input-field col s12 m5"><input type="text" name="site">
                                <label for="site">Site</label>
                            </div>
                            <div class="input-field col s12 m7"><input type="text" name="end_datentime"
                                                                       class="dtpicker">
                                <label for="">End Date</label>
                            </div>
                            <div class="col s12 m12 center-align">
                                <button class="btn waves-effect waves-light" type="submit">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col m1 hide-on-small-only"></div>
                </div>
            </form>
        </div>

        <div class="modal-footer center-align">
            <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
        </div>
    </div>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating modal-trigger red" href="#addOffer"><i class="material-icons">add</i></a>
    </div>
    <script>
        function update(id) {
            var title = $('input#title' + id).val();
            var link = $('input#link' + id).val();
            var site = $('input#site' + id).val();
            var date = $('input#end_datentime' + id).val();
            var nooftimes = $('input#times' + id).val();
            $.post("offers_update.php", {
                id: id,
                title: title,
                link: link,
                site: site,
                end_datentime: date,
                no_of_times: nooftimes
            })
                .done(function (data) {
                    Materialize.toast(data, 10000);
                    console.log(data);
                }).fail(function (data) {
                alert(data + "Problem in Updating Data.. Try again after refreshing the page or contact admin");
            });
        }
        $(function () {
            $('.dtpicker').datetimepicker();
        });
    </script>
<?php //echo date("Y-m-d H:i:s");

mysqli_close($conn);

