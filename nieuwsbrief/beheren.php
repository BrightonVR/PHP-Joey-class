<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<?php
$delete = "Delete ";
$edit = "Edit ";
$dbc = mysqli_connect('localhost','mijnschooluser','R0s1iVZh17gwLfik','mijnschool') or die('Error connecting.');

$result = $dbc->query("SELECT * FROM nieuwsbrief");

$number_of_rows = $result->num_rows;

if ($number_of_rows == 0) {
    echo "Er zit geen data in de database";
    die();
} else {
    $data = $result->fetch_all();
    echo "<table border='1'>";
    echo "<tr>" . "<th>ID</th>" . "<th>Voornaam</th>" . "<th>Tussenvoegsel</th>" . "<th>Achternaam</th>" . "<th>E-Mail</th>" . "<th>Delete</th>" . "<th>Edit</th>" . "</tr>";
    foreach ($data as $datavalues) {
        echo "<tr>";
        foreach ($datavalues as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "<td><form action='verwerk_beheren.php' method='post'><input type='submit' name='id' value='" . $delete . $datavalues[0] ."'></form></td>";
        echo "<td><form action='edit.php' method='post'><input type='submit' name='id' value='" . $edit . $datavalues[0] ."'></form></td>";
        echo "</tr>";
    }
    echo "</tr>";
}
$dbc->close();
?>

</body>
</html>