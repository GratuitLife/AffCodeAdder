<?php
/**
 * Created by PhpStorm.
 * User: Sakthi
 * Date: 30-09-2016
 * Time: 03:32 PM
 */
include(__DIR__ . '/../config.php');
session_start();
if (!$_SESSION['user']) {
    header("Location: view_login.php");
    exit;
}
?>
<html>
<head>
    <title>e33 admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:500"
          rel="stylesheet">
    <!--<link rel='stylesheet' href='https://cse.google.com/style/look/default.css' type='text/css'/>-->
    <!-- JavaScript for google search -->
    <link href="../css/materialize.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="adminstyle.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/datetimepicker.min.js"></script>
    <script src="../js/scripts.js"></script>
    <link href="../css/datetimepicker.css" rel="stylesheet">
</head>
<body>
<ul id="slide-out" class="side-nav">
    <li class="center-align"><img src="../res/logo.gif" width="150px" id="logo"/></li>
    <li><a href="index.php">Dashboard</a></li>
    <li><a href="view_trending.php">Trending</a></li>
    <li><a href="view_offers.php">Offers</a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">Users<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="view_createUser.php">Create Users</a></li>
                        <li><a href="view_user.php">View Users List</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li><a href="logout.php">Log out</a></li>
</ul>
<div class="menu-button"><a href="#" data-activates="slide-out" class="button-collapse">
        <i class="material-icons" style="color:red;">menu</i></a>
</div>

