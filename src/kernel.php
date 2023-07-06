<?php
declare(strict_types=1);
/**
 * -----------------------------------------------------------------------------------------------------
 *                                              Le Noyaux
 * 
 * Ses rôles: 
 *      - soumettre la requête du client
 *      - Récupérer la réponse correspondante
 *      - Retourner cette réponse au contrôleur frontal
 * 
 *  @author Yohan Georgelin <yohan.georgelin@gmail.com>
 *  @version 1.0.0
 *  @copyright Copyright (c) 2023 Georgelin Yohan
 * -----------------------------------------------------------------------------------------------------
 */

/**
 * Cette fonction du noyau lui permet de soumettre la requête du client pour traitement
 * Puis récupérer la réponse correspondante afin de la retourner au contrôleur frontal
 * @return string
 */
function handleRequest() : string 
{
    require ROOT . "/vegaCore/routing/router.php";

    // chargement des routes
    require ROOT . "/config/route.php";

    //execution du routeur
    run();
}