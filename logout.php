<?php
    session_start();
    session_destroy();
    $icon='success';
    $textAlert = 'You are Logout Success!';
    $gotoFile='index.php';
    require 'alertAll.php';
    ?>