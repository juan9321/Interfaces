<?php

require 'vendor/autoload.php';

use App\Mago;
use App\Guerreiro;
use App\Arqueiro;

$mago = new Mago();
$guerreiro = new Guerreiro();
$arqueiro = new Arqueiro();

$mago->Atacar("Bola de Fogo", "10");
$guerreiro->Atacar("Cortar", "5");
$arqueiro->Atacar("Flecha", "4");

?>