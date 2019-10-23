<?php
$db= new mysqli("localhost","dbuser","qwe123","webbshop2");

if(!$db){
	echo "connection failed:";
	exit;
}

$sql="SELECT * FROM products";

$result = $db->query($sql);

while





/*
//Hämtar all information om en viss användare
$sql = “SELECT * FROM users WHERE username = ?”
$stmt=$dbh->prepare($sql); //Ta för vana att använda objekt och prepare
$stmt->bind_param("s",$user); //Kopplar en variabel till ?
$result=$res->execute(); //Utför sql frågan
//Här behövs någon typ av felkontroll

$result=$res->get_result(); //Hämtar allt resultat
$row=$result->fetch_assoc(); //En rad i form av en associativ array
//Skriver ut innehållet i arrayen
echo $row[‘name’]; 
echo $row[‘address’];
