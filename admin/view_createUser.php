<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 30-09-2016
 * Time: 04:29 PM
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
    $query = "insert into user (username, password, email, role) values ('$un','$pw','$em','$rl')";
    $result = mysqli_query($conn, $query);
}
?>
    <div class="row">
        <div class="col m3"></div>
        <div class="col m6">
            <div class="row">
                <form action="view_createUser.php" method="post">
                    <div class="input-field col s12"><input id="username" name="username" type="text"
                                                            class="validate"><label for="username">Username</label>
                    </div>
                    <div class="input-field col s12"><input id="password" name="password" type="text"
                                                            class="validate"><label for="password">Password</label>
                    </div>
                    <div class="input-field col s12"><input id="email" name="email" type="text" class="validate"><label
                            for="email">E-Mail ID</label></div>
                    <div class="input-field col s12">
                        <select name="role">
                            <option value="admin" selected>admin</option>
                            <option value="editor">editor</option>
                            <option value="su">Super Admin</option>
                        </select>
                        <label>Role</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Create User</button>
                </form>
            </div>
        </div>
        <div class="col m3"></div>
    </div>
<?php
// close connection of db
mysqli_close($conn);
include 'footer.php';