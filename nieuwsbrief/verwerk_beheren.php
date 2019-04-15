<?php
if (isset($_POST['id'])) {
    $mData = explode(' ',$_POST['id']);

    $dbc = mysqli_connect('localhost', 'mijnschooluser', 'R0s1iVZh17gwLfik', 'mijnschool') or die('Error connecting.');

    $query = $dbc->query('SELECT id FROM nieuwsbrief WHERE id = ' . $mData[1]);

    $result = $query->fetch_all();
    $data = $result[0][0];

    if ($data != 0 or $data != null) {
        $query = $dbc->query('DELETE FROM nieuwsbrief WHERE id =' . $data);
        echo 'User is verweiderd uit de database.<br>';
        echo '<a href="beheren.php">Terug naar beheren</a>';
    } else {
        echo 'Helaas er is iets misgegaan in het verweideren van de gebruiker.<br>';
    }
    $dbc->close();
} else {
    echo 'Helaas er is iets misgegaan in het verweideren van de gebruiker.<br>';
    echo '<a href="beheren.php">Terug naar beheren</a>';
    exit();
}