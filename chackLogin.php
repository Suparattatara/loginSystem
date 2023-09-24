<?php
$username = $_POST['username'];
$password = $_POST['password'];
// echo $username . "  " . $password;
$sql = "SELECT * FROM tb_userlogin WHERE username = '$username' AND password = '$password' ";
require "connect.php";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row) {
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['level'] = $row['level'];
    $_SESSION['firstName'] = $row['firstName'];
    $_SESSION['lastName'] = $row['lastName'];
    $icon = 'success';
    $textAlert = 'Login Success!';
    $gotoFile = 'showData.php';
} else {

    $icon = 'warning';
    $textAlert = 'Username or Password is incorrect!';
    $gotoFile = 'index.php';
}
require "alertAll.php";
