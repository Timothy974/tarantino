<?php

//chargement de mes dépendances avec l'autoloader de compser
require __DIR__ . "/../vendor/autoload.php";


//j'instancie AltoRouter afin de créer mon propre routeur.
$router = new AltoRouter();


$router->setBasePath($_SERVER['BASE_URI']);

$router->map (
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'homepage'
);

$router->map(
    'GET',
    '/biographie/',
    [
        'controller' => 'MainController',
        'method' => 'bio'
    ],
    'biographie'
);

$router->map(
    'GET',
    '/fiche/[i:id]',
    [
        'controller' => 'FicheController',
        'method' => 'fiche'
    ],
    'fiche'
);

$router->map(
    'GET',
    '/tarantiquiz/',
    [
        'controller' => 'MainController',
        'method' => 'quizPage'
    ],
    'tarantiquiz'
);

// j'utilise la method match de la class router pour comparer l'url à mes routes définies et si elle correspond à l'une d'elles alors $match contient des infos sur la route sous forme de tableau
$match = $router->match();

//si la $match n'est pas false alors on execute la method du controller qui correspond
if($match !== false) {
    //on récupére le controller à instancier
    $controllerToUse = "Tarantino\Controllers\\". $match['target']['controller'];
    //on récupére la method de controller à instancier
    $methodToUse =  $match['target']['method'];
    // On instancie le controller à utiliser. Son nom est stocké dans la variable $controllerToUse, celle-ci sera donc remplacée par le nom du controller à l'exécution
    $controller = new $controllerToUse();
    // On exécute la méthode dont le nom est stocké dans la variable $methodToUse;
    $controller->$methodToUse($match['params']);
    

} else {
    echo "Page 404 !";
}




