<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

$user_name = $_GET["name"];
$user_mail = $_GET["mail"];
$user_age = $_GET["age"];

$check = '';

if (strlen($user_name) > 3 && str_contains($user_mail, '.' && '@') && is_numeric($user_age)) {
    $check = "Accesso riuscito!";

} else {
    $check = "Accesso negato!";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    

<form action="" method="get">

    <input type="text" name="name" id="" placeholder="Nome">
    <input type="email" name="mail" id="" placeholder="Email">
    <input type="number" name="age" id="" placeholder="Età">
    <button type="submit">Send data</button>

</form>

<p>

    <?php echo $check ?>

</p>


</body>
</html>