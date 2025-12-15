<?php

use CodeIgniter\Boot;
use CodeIgniter\Config\Paths;

require __DIR__ . '/../vendor/autoload.php';

$paths = new Paths();

$app = Boot::bootWeb($paths);
$app->run();
