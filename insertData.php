<?php
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
// echo $username.''.$password.''.$firstname.''.$lastname;
$sql = "SELECT * FROM tb_userlogin WHERE username='$username'";
require "connect.php";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($rows)>0){
    $icon='error';
    $textAlert = 'Have Username in system.';
    $gotoFile='FromAdduser.php';
    require 'alertAll.php';
    exit;
}else{
    $sql = "INSERT INTO tb_userlogin (username, password, firstName,lastName,level) VALUES (?, ?, ?,?,'user')";
    $stmt = $conn->prepare($sql);
    // Bind the values to the parameters
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);
    $stmt->bindParam(3, $firstname);
    $stmt->bindParam(4, $lastname);
   if($stmt->execute()){
    $icon='success';
    $textAlert = 'Add User Success!';
    $gotoFile='index.php';
   }else{
    $icon='error';
    $textAlert = 'Error Add User!';
    $gotoFile='FromAdduser.php';
   }
   require "alertAll.php";
}
?>
