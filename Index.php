<?php

require_once 'Player.php';
require_once 'Winner.php';

echo "
#################################################################################

Bem vindo ao PEDRA, PAPEL, TESOURA! Escolha sua arma:

1 - Pedra
2 - Papel
3 - Tesoura

";

sleep(1);
$imput = readline("Escolhe logo, caramba: ");
$fight = new Player($imput);

echo "\n#################################################################################\n";