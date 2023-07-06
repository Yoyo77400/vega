<?php
declare(strict_types=1);
// Get
/**
 * Cette méthode du routeur lui permet de récupérer les routes dont l'application attend la réceeption via la method "GET"
 *
 * @param string $route_uri
 * @param array $request_action
 * @return void
 */
function get(string $route_uri, array $route_action) : void
{
    collectRoutes("GET", $route_uri, $route_action);
}



// Post
/** Cette méthode du routeur lui permet de récupérer les routes dont l'application attend la réceeption via la method "POST"
 *
 * @param string $route_uri
 * @param array $request_action
 * @return void
 */
function post(string $route_uri, array $route_action) : void
{
    collectRoutes("POST", $route_uri, $route_action);
}


/**
 * Cette méthode lui permet de collectionner les routes dont l'application attend la réception, en prenant soin de les trier en fonction de leur methode d'envoi
 *
 * @param string $httpMethod
 * @param string $route_uri
 * @param array $request_action
 * @return void
 */
function collectRoutes(string $httpMethod, string $route_uri, array $route_action) : void 
{
    global $routes;
    $route = [];

    $route[] = $route_uri;
    $route[] = $route_action;

    $routes[$httpMethod][] = $route;
}

function run() : ?array
{
    global $routes;
    
    foreach($routes[$_SERVER['REQUEST_METHOD']] as $route)
    {
        var_dump($route); die();
    }
}

// stocker les routes dont l'application attend la réception

// Vérifier si ça match