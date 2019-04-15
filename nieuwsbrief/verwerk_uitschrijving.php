<?php

$mailadres = $_POST['mailadres'];

$dbc = mysqli_connect('localhost', 'mijnschooluser', 'R0s1iVZh17gwLfik', 'mijnschool') or die('Error connecting.');

$query = "SELECT * FROM nieuwsbrief WHERE mailadres = '$mailadres'";

$result = mysqli_query($dbc, $query) or die('Error querying.');

$number_of_rows = mysqli_num_rows($result);

if ($number_of_rows == 0) {
    echo 'Helaas, ' . $mailadres . ' is niet gevonden check uw spelling of meld u aan!.<br>';
    echo '<a href="uitschrijven.php">Klik hier om nogmaals te proberen...</a><br><br>';
    exit();
} else {

    $query = "DELETE FROM nieuwsbrief WHERE mailadres = '$mailadres'";

    $result = mysqli_query($dbc,$query) or die('Error querying (DELETE).');

    if ($result) {
        echo 'E-Mailadres ' . $mailadres . ' Verweiderd uit de database.<br>';
        echo '<a href="index.php">Klik Hier om terug tegaan naar hoofdpagina</a><br><br>';

    } else {
        echo 'Helaas er is iets misgegaan in het verweideren van uw e-mailadres.<br>';
        echo '<a href="uitschrijven.php">Klik hier om nogmaals te proberen...</a><br><br>';
    }
    mysqli_close($dbc);
}