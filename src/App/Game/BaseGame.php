<?php

namespace App\Game;

trait BaseGame
{
    private $options;

    public function __construct()
    {
        $this->options = new Options();
    }
}