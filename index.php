<?php

require("./src/Character.php");
require("./src/Archer.php");


$hero = new Character("Merlin", "brouhhh");
$vilain = new Character("orc", "hagrougrou");
$archer = new Archer("Robin", "Pour le roi", 80);
//$hero->name = "Merlin";

echo $hero->getWarcry();
$archer->rangeAttack($vilain);
echo ($vilain->vie);
echo ($vilain->isAlive());