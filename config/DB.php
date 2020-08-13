<?php

    $db =  mysqli_connect('localhost', 'root', '', 'app');

    if (!$db) {
        echo 'Failed To connect to Database '  . mysqli_connect_error();
    }