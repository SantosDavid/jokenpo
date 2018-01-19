<?php

namespace App;

use App\Contracts\Jokenpo as JokenpoContract;

class Jokenpo implements JokenpoContract 
{
    protected $player1;
    protected $player2;

    public function __construct($player1, $player2)
    {
        $this->player1 = $player1; 
        $this->player2 = $player2; 
    }

    public function start()
    {
        if ($this->checkTie()) {

            return 'Empate';
        }

        return $this->checkWinner();
    }

    protected function checkTie()
    {
        if ($this->player1 === $this->player2) {

            return true;
        }

        return false;
    }

    protected function checkWinner()
    {
       $game = FactoryGame::create($this->player1);

       return $game->win($this->player2);
    }
}