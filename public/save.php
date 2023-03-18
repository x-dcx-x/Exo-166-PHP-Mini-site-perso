<?php

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password repeat'])) {
    $username = trim(strip_tags($_POST['username']));
    $email = trim(strip_tags($_POST['email']));
    $password = trim(strip_tags($_POST['password']));
    $passwordR = trim(strip_tags($_POST['password repeat']));
    echo "Tout roule";
    var_dump($_POST);
    if($password === $passwordR) {
        echo "Username: $username";
        echo "email: $email";
    }
} else {
    echo "Ya une petite erreur";
}

echo "Username:".$_POST["username"]."<br>";
echo "Age:".$_POST["age"]."<br>";
echo "Password:".$_POST["password"]."<br>";
echo "Password Repeat:".$_POST["password repeat"]."<br>";
echo "Username:".$_POST["username"]."<br>";


$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage);

header('Location:../public/admin.php');