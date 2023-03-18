
<?php
//echo "Merci pour votre enregistrement";
$lastMessage = file_get_contents("../data/last_message.json");
$messageDecode = json_decode($lastMessage);



//echo $lastMessage;
echo "<p class='user'><span class='bold'>$lastMessage :</span> </p>";

?>