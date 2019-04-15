<?php
//$mData = explode(' ',$_POST['id']);

$id = $_POST['id'];
if (isset($_POST['username'])) {$username = $_POST['username'];}
if (isset($_POST['tussenvoegsel'])) {$tussenvoegsel = $_POST['tussenvoegsel'];}
if (isset($_POST['achternaam'])) {$achternaam = $_POST['achternaam'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}

$dbc = mysqli_connect('localhost', 'mijnschooluser', 'R0s1iVZh17gwLfik', 'mijnschool') or die('Error connecting.');

if ($username == "" or $username == null) {
} else {
    $query = "UPDATE nieuwsbrief SET voornaam = '$username' WHERE id = '$id'";
    mysqli_query($dbc, $query) or die ('Error Updating username.');
}
if ($tussenvoegsel != "" or $tussenvoegsel != null) {
    $query = "UPDATE nieuwsbrief SET tussenvoegsel = '$tussenvoegsel' WHERE id = '$id'";
    mysqli_query($dbc, $query) or die ('Error Updating tussenvoegsel.');
}
if ($achternaam != "" or $achternaam != null) {
    $query = "UPDATE nieuwsbrief SET achternaam = '$achternaam' WHERE id = '$id'";
    mysqli_query($dbc, $query) or die ('Error Updating achternaam.');
}

if ($email == "" or $email == null) {
} else {
    $query = "UPDATE nieuwsbrief SET email = '$email' WHERE id = '$id'";
    mysqli_query($dbc, $query) or die ('Error Updating email.');
}

$dbc->close();
?>
<a href="beheren.php">Terug naar beheren</a>


