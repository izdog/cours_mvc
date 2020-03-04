<?php
session_start();

// Constante d'environnement
define('ROOT', __DIR__.DIRECTORY_SEPARATOR);
define('PATH_URL', '/COURS_MVC');

// Importer l'autoloader
require_once('./vendor/autoload.php');

// Création du routeur
$router = new \Bramus\Router\Router();

$router->get('/blog/([a-z0-9_-]+)?', function($slug = null){
    dump($slug);
});

$router->run();