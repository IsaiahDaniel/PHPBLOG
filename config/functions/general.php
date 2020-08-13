<?php

    function sanitize($data){
        global $db;
        return mysqli_real_escape_string($db, $data);
    }