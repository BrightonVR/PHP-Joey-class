<?php

$subject = $_POST['subject'];
$message = $_POST['message'];

// CONNECTION DATABASE
$dbc = mysqli_connect('localhost', 'mijnschooluser', 'R0s1iVZh17gwLfik', 'mijnschool') or die('Error connecting.');

// WRITE QUERY
$result = $dbc->query("SELECT mailadres FROM nieuwsbrief");
$data = $result->fetch_all();

// Loop MAIL
$headers = "From: Bvanrouendal@roc-dev.com";
foreach ($data as $row) {
    foreach ($row as $cell) {
        echo "Mail verzonden naar: " . $cell . "<br>";

        $toMail = $cell;
        mail($toMail, $subject, $message, $headers);
    }
}
echo "Klaar met verzenden.";