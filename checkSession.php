<?php
    if (!isset($_SESSION['username'])) {
        $icon = 'warning';
        $textAlert = 'You are not Login!';
        $gotoFile = 'index.php';
        require 'alertAll.php';
        exit;
    }
    ?>