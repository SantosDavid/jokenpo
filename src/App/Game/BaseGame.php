<?php

namespace App\Game;

use App\Options;

trait BaseGame
{
    private $options;

    public function __construct()
    {
        $this->options = new Options();
    }
}