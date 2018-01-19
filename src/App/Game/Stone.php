<?php

namespace App\Game;

use App\Game\Contract\GameContract;

class Stone implements GameContract
{
    use BaseGame;

    public function win(string $option)
    {
         if (in_array($option, $this->options->getStoneWins())) {

            return 1;
         }

         return 2;
    }
}