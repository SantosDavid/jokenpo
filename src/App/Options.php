<?php

namespace App;

class Options
{
    private $paper    = ['stone'];
    private $stone    = ['scissors'];
    private $scissors = ['paper'];

    public function getPaperWins()
    {
        return $this->paper;
    }

    public function getStoneWins()
    {
        return $this->stone;
    }

    public function getScissorsWins()
    {
        return $this->scissors;
    }
}