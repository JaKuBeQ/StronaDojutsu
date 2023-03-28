<?php
session_start();
if(!isSet($_SESSION['log'])){
    header('location: loguj.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Strona główna</title>
</head>
<body>

<div class="strona">
<p>Jesteś na stronie głównej </p>
<p>Przed opuszczeniem strony wyloguj się! </p>
<a href = "wyloguj.php">wyloguj</a>
</div>

</body>
</html>