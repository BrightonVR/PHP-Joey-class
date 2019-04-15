<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Edit ID: <?php
    $mData = explode(' ',$_POST['id']);
    echo $mData[1] ?></h1>
<form action="verwerk_edit.php" method="post">
    <label>ID: <select id="test" name="id"><option name="id" value="<?php echo $mData[1] ?>"><?php echo $mData[1] ?> </option></select></label><br>
    <label>Gebruikersnaam: <input id="username" name="username" value=""></label><br>
    <label>Tussenvoegsel: <input id="tussenvoegsel" name="tussenvoegsel" value=""></label><br>
    <label>Achternaam: <input id="achternaam" name="achternaam" value=""></label><br>
    <label>E-mail: <input id="email" type="email" name="email" value=""></label><br>
    <input type="submit" name="submit"><br>
</form>
</body>
</html>