<?php

namespace App\Game;

use App\Game\Contract\GameContract;

class Scissors implements GameContract
{
    use BaseGame;

    public function win(string $option)
    {
        if (in_array($option, $this->options->getScissorsWins())) {

            return 1;
        }

        return 2;
    }
}