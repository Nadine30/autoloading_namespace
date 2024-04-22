<?php
require "src/vendor/autoload.php";

$db = new PDO("mysql:host=localhost;dbname=user_hydratation","root","");

$manager = new Utilisateurs\UserManager($db);
$user = new User(1,"nadine@hotmail.com","1234");
$manager->ajouter($user);
// $user = $manager->récupérer(1);
// $manager->modifier($user,"nado@gmail.com","12345");
// $manager->supprimer(1);
// $manager->all();

