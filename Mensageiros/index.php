<?php

require 'vendor/autoload.php';

use App\Whatsapp;
use App\Email;
use App\SMS;

$Whats = new Whatsapp();
$Sms = new SMS();
$Email = new Email();

$Whats->enviar("Mensagem enviada por:");
$Sms->enviar("Mensagem enviada por:");
$Email->enviar("Mensagem enviada por:");

?>