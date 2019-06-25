<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <title>Studenteninformatiesysteem</title>
</head>

<body>

<!-- BEGIN MENU -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                <span class="fa fa-bars"></span>
            </button>
            <a href="index.php" class="navbar-brand">Alfa Arte
                <!--                <img src="https://lh5.googleusercontent.com/ZjkBVlmWqtX3FC_yLNCdLijQ3q0yPHQgXS0lT5-WKNkJMs9ERsf2y3pf1Z9bcHZyMGwEJxf7FGVO2khcD436Dh0UQKfNiO3vZp0roSqEFiCnFG4NdBFt02fWRso4w5sQD_RhkEAG" width="30" height="30" alt="">-->
            </a>
        </div>
        <!-- hier menu links -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="nav navbar-nav">
                <?php 
                    if(isset($_SESSION['user_id'])):
                ?>
                <li><a href="index.php">Agenda <span class="far fa-calendar-alt"></span></a></li>
                <li><a href="berichten.php">Berichten <span class="fas fa-inbox"></span></a></li>
                <li><a href="resultaten.php">Resultaten <span class="fas fa-poll"></span></a></li>
                <li><a href="werklijst.php">Werklijst <span class="fas fa-briefcase"></span></a></li>
                <?php else: ?>
                <?php endif; ?>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php 
                    if(isset($_SESSION['user_id'])):
                ?>
                    <li><a href="personalia.php">Personalia <span class="fas fa-user"></span></a></li>
                    <li><a href="feedback.php">Feedback <span class="far fa-comment"></span></a></li>
                <?php else: ?>
                <?php endif; ?>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li><a href="app/script/afmelden.php">Afmelden <span class="fa fa-lock"></span><span class="fa fa-toggle"></span></a></li>
                <?php else: ?>
                    <li><a href="login.php">Login <span class="fa fa-lock"></span><span class="fa fa-toggle"></span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- EINDE MENU -->
</nav>
<!-- EINDE MENU -->