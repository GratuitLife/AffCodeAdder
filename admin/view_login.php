<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 30-09-2016
 * Time: 04:03 PM
 */
include(__DIR__ . '/../config.php');

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from user where username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['password'] == $password) {
                session_start();
                $_SESSION['user'] = $username;
                $_SESSION['role'] = $row['role'];
                header("Location: view_dash.php");
                exit;
            } else {
                $error = "<i class=\"material-icons\" style='color:red'>warning</i> wrong password";
            }
        }
    } else {
        $error = "<i class=\"material-icons\" style='color:red'>add_alert</i>  No User Registered";
    }

} else {
    $error = "";
}

?>
<html>
<body>
<link rel="stylesheet" href="adminstyle.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="row">
    <div class="col hide-on-small-only m3 l4"></div>
    <div class="col s12 m6 l4">
        <div class="center-align"><?php echo $error . "<br>"; ?></div>
        <form action="view_login.php" method="post">
            <label for="username">Username</label>
            <input type="text" title="username" name="username">
            <label for="password">Password</label>
            <input type="password" title="password" name="password">

            <button class="btn waves-effect waves-light" type="submit" name="action">Login</button>
        </form>
    </div>
    <div class="col hide-on-small-only m3 l4"></div>
</div>
<script src="../js/materialize.min.js" type="application/javascript"></script>
</body>
</html>
