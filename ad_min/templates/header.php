<?php
    session_start();
    if ($_SESSION['sess_status'] == FALSE) { header('Location: login.php'); die(); }      
    include_once "inc/db.php";
    include_once "inc/functions.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Heaven On My Earth | Admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/fav.png">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style4.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>