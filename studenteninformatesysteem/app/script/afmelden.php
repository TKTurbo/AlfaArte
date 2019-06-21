<?php 
session_start();
if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
}

if(isset($_SESSION['naam'])){
    unset($_SESSION['naam']);
}
if(isset($_SESSION['leeftijd'])){
    unset($_SESSION['leeftijd']);
}
if(isset($_SESSION['telefoon'])){
    unset($_SESSION['telefoon']);
}
if(isset($_SESSION['telefoon_ouder'])){
    unset($_SESSION['telefoon_ouder']);
}

if(isset($_SESSION['school_mail'])){
    unset($_SESSION['school_mail']);
}

if(isset($_SESSION['prive_mail'])){
    unset($_SESSION['prive_mail']);
}

if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
}


session_destroy();

header('Location: ../../login.php');