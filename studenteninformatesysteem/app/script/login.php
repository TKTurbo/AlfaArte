<?php
session_start();
require('../connection/db_connection.php');

// de inputs van het login formulier
$email=$_POST['email']; 
$password=$_POST['psw']; 

// beveiliging tegen SQL injectie
$dbQuery=$conn->prepare("SELECT * FROM leerling
    WHERE schoolemail= :email");

$dbQuery->execute([
    ':email' => $email,
]);

$db_query=$conn->prepare("SELECT klas_id FROM klas_leerling
    WHERE users_id= :id"     
);

$db_query->execute([
    ':id' => $id,
]);

$klas_id = $db_query->fetch();


$db_query=$conn->prepare("SELECT * FROM klas
    WHERE id= :id"     
);

$db_query->execute([
    ':id' => $klas_id,
]);
$klas = $db_query->fetch();

$count = $dbQuery->rowCount();

// hier zetten we de data in een variabele
$user = $dbQuery->fetch(PDO::FETCH_ASSOC);


// Vergelijk wachtwoorden
if(password_verify($password, $user['wachtwoord'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['klas_id'] = $klas_id;
    $_SESSION['naam'] = $user['voornaam'] . ' '  . $user['achternaam'];
    $_SESSION['school_mail'] = $user['schoolemail'];
    header('Location: ../../index.php');
}

	$dbQuery=$conn->prepare("SELECT * FROM users
    WHERE schoolemail= :email");

$dbQuery->execute([
    ':email' => $email,
]);
$user = $dbQuery->fetch(PDO::FETCH_ASSOC);

// Vergelijk wachtwoorden
if(password_verify($password, $user['wachtwoord'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user'] = 'leraar';
    $_SESSION['naam'] = $user['voornaam'] . ' '  . $user['achternaam'];
    $_SESSION['school_mail'] = $user['schoolemail'];
    header('Location: ../../index.php' );
    
}
$_SESSION['error'] = 'Email en/of wachtwoord klopt niet!';

?>
