<?php

// fin mise en place autoload

use Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

// Initialisation de la librairie
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();