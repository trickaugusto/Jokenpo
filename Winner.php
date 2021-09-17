<?php

require_once 'Player.php';

/* 
Pedra > tesoura
Tesoura > Papel
Papel > pedra
*/

class Winner
{
    public function Winner($gunPlayer, $Computer)
    {
        sleep(1);

        echo "PLAYER Escolheu: $gunPlayer\nBOT escolheu $Computer\n";

        sleep(1);

        if($gunPlayer == $Computer){
            return "\nEMPATE!";
        } elseif (($gunPlayer == 'pedra' && $Computer == 'tesoura') || ($gunPlayer == 'tesoura' && $Computer == 'papel') || ($gunPlayer == 'papel' && $Computer == 'pedra')){
            return "\nPLAYER WIN!";
        } 

        return "\nBOT WIN!";
    }
}

// elif (player == 0 and computer == len(choices)-1) or (player>computer and not(player==len(choices)-1 and computer==0)):
