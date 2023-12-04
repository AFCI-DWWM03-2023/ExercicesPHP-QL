<?php

require_once "Animal.class.php";
require_once "Chien.class.php";

$animal = new Animal("Bruno", 3);
$animal->afficherInfos();

$chien = new Chien("Dog", 2, "Samoyed");
$chien->afficherInfos();
$chien->aboyer();