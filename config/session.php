<?php

// Récupération de la durée de vie souhaitée de la session
$sessionLifeTime = $_ENV['SESSION_LIFE_TIME'] * 60;

//On modifie les données de la configuration de base de php
ini_set("session.gc_maxlifetime", $sessionLifeTime);

//Pour la session actuelle on entre les paramètres voulus
session_set_cookie_params([
    "lifetime" => $sessionLifeTime,
    "path" => "/",
    "domain" => null,
    "secure" => true,
    "httponly" => true
    ]);

//démarage d'une session si aucune session n'est ouverte
if( session_status() === PHP_SESSION_NONE){
    session_start();
}