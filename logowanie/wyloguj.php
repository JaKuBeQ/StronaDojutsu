<?php
session_start();
if(isSet($_SESSION['log'])){
    unset($_SESSION['log']);
}
else{
    header('location: loguj.php');
    exit;
}
$s=session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Koniec sesji</title>
</head>
<body>

    <div class="wylogowanie">
    <p>Wylogowałeś się ze strony.</p>
    <a href = "loguj.php">loguj</a>
    </div>
</body>
</html>