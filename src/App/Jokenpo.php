<?php

namespace App;

use App\Contracts\Jokenpo as JokenpoContract;

class Jokenpo implements JokenpoContract 
{
    protected $player1;
    protected $player2;
    protected $options = ['paper' => 'stone', 'stone' => 'scissors', 'scissors' => 'paper'];

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
        foreach ($this->options as $win => $loses) {

            if ($this->player1 === $win && $this->player2 === $loses) {

                return 1;
            }

            if ($this->player2 === $win && $this->player1 === $loses) {

                return 2;
            }
        }
    }
}