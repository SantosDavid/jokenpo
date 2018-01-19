<?php

namespace App\Game;

use App\Game\Contract\GameContract;

class Paper implements GameContract
{
    use BaseGame;

    public function win(string $option)
    {
        if (in_array($option, $this->options->getPaperWins())) {

            return 1;
        }

        return 2;
    }
}