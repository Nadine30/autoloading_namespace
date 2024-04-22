<?php
require "vendor/autoload.php";

$db = new PDO("mysql:host=localhost;dbname=user_hydratation","root","");

$manager = new Utilisateurs\UserManager($db);
$user = new Utilisateurs\User(1,"nadine@hotmail.com","1234");
// echo $user;
$manager->ajouter($user);
// $user = $manager->récupérer(1);
// echo $user;
// $manager->modifier($user,"nado@gmail.com","12345");
// $manager->supprimer(1);
$users= $manager->all();
print_r($users);

