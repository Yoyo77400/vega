<?php 


/**
 * ---------------------------------------------------------------------------
 *                         L'amorceur de l'application
 * 
 * Ses rôles: 
 *      - Charger les raccourcis (constantes)
 *      - Charger les variables d'environnement
 *      - Charger la configuration système
 *      - Charger la configuration session
 *      - Charger le monolog
 * ---------------------------------------------------------------------------
 */ 

// chargement des raccourcis (constante)
require __DIR__ . "/constants.php";

 // chargement des variables d'environnement
$envFile = parse_ini_file(ROOT . "/env.conf");

var_dump($envFile);