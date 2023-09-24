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
require 'checkSession.php';
$level = $_SESSION['level'];
$username = $_SESSION['username'] ;
$fullname = $_SESSION['firstName'] .'  '. $_SESSION['lastName'];
?>
<body>
    <div class="container">
        <div class="alert alert-success">
            <strong>Level : </strong> <?php echo $level ?> <button class="btn btn-danger" onclick="window.location.href='logout.php'">Logout</button>
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

    <div class="container">
        <table class="table">
            <tableHead>
                <tr>
                    <th>SECT_ID</th>
                    <th>SECT_NAME</th>
                    <th>SECT_BUILDING_NAME</th>
                    <th>SECT_TELEPHONE</th>
                </tr>
            </tableHead>
            <tableBody>
                <?php
                $sql = "SELECT * FROM tb_section";
                require "connect.php";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row){
                    echo"<tr>";
                    echo"<td>".$row['SECT_ID']."</td>";
                    echo"<td>".$row['SECT_NAME']."</td>";
                    echo"<td>".$row['SECT_BUILDING_NAME']."</td>";
                    echo"<td>".$row['SECT_TELEPHONE']."</td>";
                    echo"</tr>";
                    

                }
                ?>

            </tableBody>
    </div>

</body>
</html>