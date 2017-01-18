<?php
// récupère la classe Chat
include "Chat.php";

// instancie le premier chat et affiche ses données
$chat1 = new Chat("titi",4,"gris","male","siamois");
echo $chat1->getInfos();

// instancie le deuxième chat et affiche ses données
$chat2 = new Chat("lola",2,"blanc","femelle","persan");
echo $chat2->getInfos();

// instancie le troisième chat et affiche ses données
$chat3 = new Chat("calin",1,"noir","male","Abyssin");
echo $chat3->getInfos();
