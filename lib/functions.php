<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent()
{
    if (!isset($_GET['page'])) {
        include __DIR__ . '/../pages/home.php';
    } elseif (isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__ . '/../pages/bio.php';
    } elseif (isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__ . '/../pages/contact.php';
    }

}

function getPart($name)
{
    include __DIR__ . '/../parts/' . $name . '.php';
}

function getUserData()
{
    $content = file_get_contents("../data/user.json");
    $contents = json_decode($content);

    foreach ($contents as $key => $value) {
        if (is_array($value)) {
            echo "<p class='identity'> $key </p>";
            foreach ($value as $array) {
                foreach ($array as $items => $valueDeux) {
                    echo "<p class='user'><span class='bold'>$items :</span> $valueDeux </p>";
                }
            }
        } else {
            echo "<p class='user'> <span class='bold'>$key :</span> $value</p>";
        }
    }
}