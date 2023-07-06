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
require __DIR__ . "/dotenv.php";

// chargement de la configuration système
require __DIR__ . "/system.php";

// chargement de la configuration session
require __DIR__ . "/session.php";

//Chargement du monolog
require __DIR__ . "/monolog.php";