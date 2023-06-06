<?php

    $connect = mysqli_connect('localhost', 'root', '', 'AUTO_CASTA_BD');

    if (!$connect) {
        die('Error connect to DataBase');
    }