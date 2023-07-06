<?php 

/** 
 * ----------------------------------------------------
 *                  Bienvenue sur Vega
 *  
 * Ce fichier représente le contrôleur frontal. 
 * https://en.wikipedia.org/wiki/Front_controller
 *  
 * Ses rôles: 
    *  -Recevoir la requête du client
    *  -Amorcer l'application
    *  -Charger le noyau de l'application
    *  -Demander au noyau de traiter la requête du client
    *  -Récupérer la réponse correspondante
    *  -L'afficher au client
 *  
 * ----------------------------------------------------
 */ 

//Reception  la requête du client
    // Toutes les données se trouvent la variable super global $_SERVER.

//Amorçage de l'application (Charger les fichier de configuration)
require __DIR__ . "/../config/bootstrap.php";

// Chargement du noyau de l'application
require ROOT . "/src/kernel.php";

// Permet de vérifier que la requête a été effectué depuis un navigateur et non par un terminal.
if ( php_sapi_name() !== "cli")
{
// Traitrement de la requêtte et récupération de la réponse correspondante.
$response = handleRequest();

// Affichage de la réponse au client 
echo $response;
}

