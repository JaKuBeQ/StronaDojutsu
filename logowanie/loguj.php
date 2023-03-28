

<?php
session_start();
if(isSet($_SESSION['log'])){
    header('location: strona.php');
    exit();
}
else if(isSet($_POST['nazwa'])&&isSet($_POST['haslo'])){
    if($_POST['nazwa']=='kuba' &&$_POST['haslo']=='kuba'){
        $_SESSION['log']= 'nazwa';
        header('location: strona.php');
        exit;
    }
else{
    echo "Nieprawidłowe dane logowania<br/>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Autoryzacja danych</title>
</head>
<body>
    
<div>

<form action="loguj.php" method="post">
<div class="logowanie2">
<b>Logowanie</b><br/><br/>
</div>
<div class="logowanie3">
<br/><b>Nazwa użytkownika:</b><br/>
<input type=text name="nazwa" value="" size="25"><br/>
<br/><b>Hasło:</b><br/>
<input type=password name="haslo" value="" size="25"><br/>
<input type="submit" value="Zaloguj się" ><br/>
</div>
</form>
</div>

</body>
</html>
