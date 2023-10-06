<?php
require_once '../mesClasses/Arme.php';

$arme = new Arme();

$arme->setNom("Épée");
echo "Nom de l'arme : " . $arme->getNom() . "<br>";

$arme->setNomImage("epee.png");
echo "Nom de l'image de l'arme : " . $arme->getNomImage() . "<br>";

$arme->setDescription("Une épée tranchante");
echo "Description de l'arme : " . $arme->getDescription() . "<br>";


?>
