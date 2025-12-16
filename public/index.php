<?php

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

require FCPATH . '../vendor/autoload.php';

$pathsConfig = FCPATH . '../app/Config/Paths.php';
require_once $pathsConfig;

$paths = new Config\Paths();

// Load the framework bootstrap file
$bootstrap = new CodeIgniter\Boot($paths);
$app = $bootstrap->bootWeb($paths); // <-- Corrigido aqui

$app->run();