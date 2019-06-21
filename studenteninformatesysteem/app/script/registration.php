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
$semail = $_POST['semail'];
$pemail = $_POST['pemail'];
$geboortedatum = $_POST['datum'];
$telnummer = $_POST['mobiel'];
$telnummerouders = $_POST['mobieloud'];

$basicpsw = 'Welkom123';
$password = password_hash($basicpsw, PASSWORD_DEFAULT);

$semail = $semail . '@alfa-arte.nl';
try{
$db_query = $conn->prepare(
    "INSERT INTO leerling(voornaam, achternaam, wachtwoord, schoolemail, priveemail, geboortedatum, telefoon, telefoonouder)
     VALUES(:voornaam, :achternaam, :wachtwoord, :mailadres,  :priveemail, :datum, :mobiel, :mobieloud)"
);


$db_query->execute([
        ':voornaam' => $voornaam,
        ':achternaam' => $achternaam,
        ':wachtwoord' => $password,
        ':mailadres' => $semail,
        ':priveemail' => $pemail,
        ':datum' => $geboortedatum,
        ':mobiel' => $telnummer,
        ':mobieloud' => $telnummerouders
    ]);

} 
    catch (PDOException $error) {
    echo "ERROR: " . $error->getMessage();
    die();
}

header('Location: ../../registreren.php');