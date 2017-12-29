<?php

use App\Validation;
use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{   
    public function testStone()
    {
        $validation = new Validation('stone', 'stone');

        $this->assertEquals($validation->verify(), true);
    }

    public function testPaper()
    {
        $validation = new Validation('paper', 'paper');

        $this->assertEquals($validation->verify(), true);
    }

    public function testScissors()
    {
        $validation = new Validation('scissors', 'scissors');

        $this->assertEquals($validation->verify(), true);
    }

    public function testValuesNotAccepted()
    {
        $validation  = new Validation('test', 'whats');
        $validation1 = new Validation('validation', 'PHP');
        $validation2 = new Validation('pape', 'stoner');

        $this->assertEquals($validation->verify(), false);
        $this->assertEquals($validation1->verify(), false);
        $this->assertEquals($validation2->verify(), false);
    }
}