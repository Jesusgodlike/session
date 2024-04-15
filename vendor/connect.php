<?php

    $connect = mysqli_connect('localhost', 'root', '', 'emirmed');

    if (!$connect) {
        die('Error connect to DataBase');
    }