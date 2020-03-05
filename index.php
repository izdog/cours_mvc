<?php
session_start();

// Constante d'environnement
define('ROOT', __DIR__.DIRECTORY_SEPARATOR);
define('PATH_URL', '/COURS_MVC');

// Importer l'autoloader
require_once('./vendor/autoload.php');

// Création du routeur


echo '<h1>Bonjour le monde</h1>';