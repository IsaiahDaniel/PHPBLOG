<?php
    require 'config/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PHP Blog</title>
</head>
<body>
    
    <navbar class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a href="index.php" class="navbar-brand">PHPBLOG</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="addpost.php" class="nav-link">Add Post</a>
                    </li>
                </ul>
            </div>
        </div>
    </navbar>
