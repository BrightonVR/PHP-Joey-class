<?php

// POST-ARRAY UITLEZEN
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$mailadres = $_POST['mailadres'];

// DATA IN DE DATABASE STOPPEN
$dbc = mysqli_connect('localhost','mijnschooluser','R0s1iVZh17gwLfik','mijnschool') or die('Error connecting.');
// QUERY NAAR DATABASE
$query = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$mailadres')";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die('Error querying.');
// VERBINDING VERBREKEN
mysqli_close($dbc);

// BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result) {
    echo 'De volgende gegevens zijn toegevoegt aan de datbase:<br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel . '<br>';
    echo $achternaam . '<br>';
    echo $mailadres . '<br>';
} else {
    echo 'Sorry, er is iets misgegaan. Probeer het opnieuw.';
}