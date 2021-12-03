<?php

/* Pedra, papel, tesoura

Pedra > tesoura
Tesoura > Papel
Papel > pedra

Pedir nickname do Player 1 e Player 2
Clicando no botão vai pra outra tela onde tem o nome do Player 1 do lado esquerdo e Player 2 no direito
No meio o botão pra jogar onde já começa com o primeiro vencedor

Randomico player 1 e 2

*/ 

require_once 'Winner.php';

class Player extends Winner
{
    protected $gunPlayer;
    protected $Computer;

    public function __construct($choicePlayer)
    {
        $this->setGunPlayer($choicePlayer);
        $this->setGunComputer(rand(1,3));

        echo $this->Winner($this->getGunPlayer(), $this->getGunComputer());
    }

    // GETTERS
    public function getGunComputer()
    {
        return $this->Computer;
    }

    public function getGunPlayer()
    {
        return $this->gunPlayer;
    }

    // SETTERS
    public function setGunComputer($Computer)
    {
        $this->Computer = $this->setGun($Computer);
    }

    public function setGunPlayer($player)
    {
        $this->gunPlayer = $this->setGun($player);
    }

    // METHODS
    public function setGun($gamer)
    {
        $choices = [
            '1' => 'pedra',
            '2' => 'papel',
            '3' => 'tesoura'
        ];

        $choice = $choices[$gamer];
        return $choice;
    }
}
