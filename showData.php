<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php
session_start();
$level = $_SESSION['level'];
$username = $_SESSION['username'] ;
$fullname = $_SESSION['firstName'] .'  '. $_SESSION['lastName'];
?>
<body>
    <div class="container">
        <div class="alert alert-success">
            <strong>Level : </strong> <?php
            echo $level ?>
        </div>
        <div class="alert alert-success">
            <strong>Usename : </strong> <?php
            echo $username ?>
        </div>
        <div class="alert alert-success">
            <strong>Fullname : </strong> <?php
            echo $fullname ?>
        </div>
    </div>
</body>