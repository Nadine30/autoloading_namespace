<?php
$sql = "CREATE TABLE Users (id int auto_increment primary key, email varchar(100),password varchar(50))";

try {
	$db = new PDO("mysql:host=localhost;dbname=user_hydratation", "root", "");
	$db->exec($sql);
	echo "Table Utilisateur créée avec succès";
} catch (Exception $e) {
	echo $e->getMessage();
}