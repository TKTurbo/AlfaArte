<?php
session_start();
require('../connection/db_connection.php');
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    //Als je de url intypt dan gaan we terug
    header('Location: ../../registreren.php');
    die();
}

$voornaam = $_POST['vnaam'];
$achternaam = $_POST['anaam'];
$email = $_POST['email'];
$geboortedatum = $_POST['datum'];
$telnummer = $_POST['mobiel'];
$telnummerouders = $_POST['mobieloud'];

$email = $email . '@alfa-arte.nl';
try{
$db_query = $conn->prepare(
    "INSERT INTO leerling(voornaam, achternaam, schoolemail, geboortedatum, telefoon, telefoonouder)
     VALUES(:voornaam, :achternaam, :mailadres, :datum, :mobiel, :mobieloud)"
);


$db_query->execute([
        ':voornaam' => $voornaam,
        ':achternaam' => $achternaam,
        ':mailadres' => $email,
        ':datum' => $geboortedatum,
        ':mobiel' => $telnummer,
        ':mobieloud' => $telnummerouders
    ]);

} 
    catch (PDOException $error) {
    echo "ERROR: " . $error->getMessage();
    die();
}

//header('Location: ../../registreren.php');