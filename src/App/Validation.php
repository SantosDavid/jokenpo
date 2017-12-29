<?php

namespace App;

use App\Contracts\Validation as ValidationContract;

class Validation implements ValidationContract
{
    protected $player1;
    protected $player2;
    protected $options = ['paper', 'stone', 'scissors'];

    public function __construct($player1, $player2)
    {
        $this->player1 = $player1; 
        $this->player2 = $player2; 
    }

    public function verify()
    {
        if (in_array($this->player1, $this->options) && in_array($this->player2, $this->options)) {

            return true;
        }

        return false;
    }
}