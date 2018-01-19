<?php

use App\Jokenpo;
use App\Validation;

require_once '../vendor/autoload.php';

$player1 = $_GET['player1'] ?? null;
$player2 = $_GET['player2'] ?? null;

$validation = new Validation($player1, $player2);

if (!$validation->verify()) {

    return 'Erro na validação dos dados';
}

$game = new Jokenpo($player1, $player2);

echo $game->start();
