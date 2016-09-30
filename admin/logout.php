<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 30-09-2016
 * Time: 05:38 PM
 */
session_start();
session_unset();

header("Location: view_login.php");
exit;