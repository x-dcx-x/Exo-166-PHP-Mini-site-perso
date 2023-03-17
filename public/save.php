<?php
echo "Username:".$_POST["username"]."<br>";
echo "Age:".$_POST["age"]."<br>";
echo "Password:".$_POST["password"]."<br>";
echo "Password Repeat:".$_POST["password repeat"]."<br>";
echo "Username:".$_POST["username"]."<br>";


$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage);

header('Location: admin.php');