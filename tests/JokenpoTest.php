<?php

use App\Jokenpo;
use PHPUnit\Framework\TestCase;

class JokenpoTest extends TestCase
{   
    public function testTie()
    {
        $stone = new Jokenpo('stone', 'stone');
        $paper = new Jokenpo('paper', 'paper');
        $scissors = new Jokenpo('scissors', 'scissors');

        $this->assertEquals($stone->start() , 'Empate');
        $this->assertEquals($paper->start(), 'Empate');
        $this->assertEquals($scissors->start(), 'Empate');
    }

    public function testStonePaper()
    {
        $stone = new Jokenpo('stone', 'paper');
    
        $this->assertEquals($stone->start() , '2');
    }

    public function testStoneScissors()
    {
        $stone = new Jokenpo('stone', 'scissors');
    
        $this->assertEquals($stone->start() , '1');
    }
    
    public function testPaperStone()
    {
        $stone = new Jokenpo('paper', 'stone');
    
        $this->assertEquals($stone->start() , '1');
    }

    public function testPaperScissors()
    {
        $stone = new Jokenpo('paper', 'scissors');
    
        $this->assertEquals($stone->start() , '2');
    }

    public function testScissorsPaper()
    {
        $stone = new Jokenpo('scissors', 'paper');
    
        $this->assertEquals($stone->start() , '1');
    }
    
    public function testScissorsStone()
    {
        $stone = new Jokenpo('scissors', 'stone');
    
        $this->assertEquals($stone->start() , '2');
    }
}