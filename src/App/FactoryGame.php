<?php

namespace App;

class FactoryGame
{
    private static $namespace = 'App\Game\ ';
    
    public function create($className)
    {
        $class = trim(Self::$namespace) . ucfirst($className);

        return new $class();
    }
}