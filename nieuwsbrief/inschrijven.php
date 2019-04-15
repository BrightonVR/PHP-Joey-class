<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrenen</title>
</head>
<body>
<h1>NIEUWSBRIEF</h1>
<h2>Inschrijven</h2>
<a href="index.php">Terug naar de indexpagina</a><br>

<form method="post" action="verwerk_inschrijving.php">
    <label>voornaam:<input type="text" name="voornaam" placeholder="Jan"/></label><br>
    <label>Tussenvoegsel:<input type="text" name="tussenvoegsel" placeholder="de"/></label><br>
    <label>Achtenaam:<input type="text" name="achternaam" placeholder="Jong"/></label><br>
    <label>Email:<input type="email" name="mailadres" placeholder="Jan@gmail.com"/></label><br><br>
    <input type="submit" name="submit"/>
</form>

</body>
</html>
