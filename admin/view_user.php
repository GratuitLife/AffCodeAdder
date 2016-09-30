<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 30-09-2016
 * Time: 08:07 PM
 */

include 'header.php';
if (!$_SESSION['role'] == 'su') {
    echo "You don't have sufficient permission to do this";
    exit;
}
if ($_POST) {
    $un = $_POST['username'];
    $pw = $_POST['password'];
    $em = $_POST['email'];
    $rl = $_POST['role'];
    $uid = $_POST['uid'];
    $query = "update user set username='$un', password='$pw', email ='$em', role='$rl' where uid = '$uid'";
    $result = mysqli_query($conn, $query);
}

$query = "select * from user";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="row s12">
        <div class="col m1 hide-on-small-only"></div>
        <div class="col s12 m10">
            <form action="view_user.php" method="post">
                <input type="hidden" name="uid" value="<?php echo $row['uid']; ?>">
                <div class="input-field col s12">
                    <input type="text" class="validate" id="username" name="username"
                           value="<?php echo $row['username']; ?>">
                    <label for="username">Username</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" id="password" name="password"
                           value="<?php echo $row['password']; ?>">
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" id="email" name="email" value="<?php echo $row['email']; ?>">
                    <label for="email">Email ID</label>
                </div>
                <div class="input-field col s12">
                    <select name="role">
                        <option value="<?php echo $row['role']; ?>" selected><?php echo $row['role']; ?></option>
                        <option value="admin">admin</option>
                        <option value="editor">editor</option>
                        <option value="su">su</option>
                    </select>
                    <label>Role</label>
                </div>
                <div class="col s12 center-align">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Update User</button>
                </div>

            </form>

        </div>
        <div class="col m1 hide-on-small-only"></div>
    </div>

    <?php
}


mysqli_close($conn);
include 'footer.php';