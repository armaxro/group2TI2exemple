<?php
<<<<<<< HEAD

// Front Controller // 

// chargement de dépendances

// chargement de configuration

require_once "../config.php";



// appel de la vue de test


=======
/*
Front Controller
*/

/*
* Chargement des dépendances
*/
// chargement de configuration
require_once "../config.php";

/*
Routeur vers nos 4 pages --> $route
*/
require_once "../controller/routerController.php";

/* Appel de la vue
*/
include_once "../view/$route";
>>>>>>> c198dba5d2e3324275b99494e0ac55d77e7be456
