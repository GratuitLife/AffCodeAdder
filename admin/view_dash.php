<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 30-09-2016
 * Time: 04:23 PM
 */

include 'header.php';

echo "hi " . $_SESSION['user'] . ", You are logged in as " . $_SESSION['role'];


include 'footer.php';