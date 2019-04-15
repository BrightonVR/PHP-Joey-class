<?php
$id = '2';
$dbc = mysqli_connect('localhost', 'mijnschooluser', 'R0s1iVZh17gwLfik', 'mijnschool') or die('Error connecting.');


$prepare = mysqli_query($dbc,'SELECT id FROM nieuwsbrief WHERE id = ' . $id);
if ($prepare) {
    print 'true';
} else {
    print 'false';
}
$result = $prepare->fetch_all();
print_r($result[0][0]);