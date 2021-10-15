<?php

require_once 'Controllers/autoController.php';
require_once 'Controllers/marcaController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'inicio';
}
$params = explode('/', $action);

$autoController = new AutoController();
$marcaController = new MarcaController();

switch ($params[0]) {
    case 'inicio':
        
        $autoController->verAutos();
        break;
    case 'auto':
        
        $autoController->verAuto($params[1]);
        break;    
    case 'autos-marca':
        
        $autoController->verAuto_Marca($params[1]);
        break;    
    case 'Marcas':
        
        $marcaController->verMarcas();
        break;    
    case 'Admin-auto':

        $autoController->verAutosAdmin();
        break;    
    case 'Admin-marca':

        $marcaController->verMarcasAdmin();
        break;    
    case 'Eliminar-auto':

        $autoController->delAuto($params[1]);
        break;    
    case 'Eliminar-marca':

        $marcaController->delMarca($params[1]);
        break;    
    default:
        echo "Error 404 - (Página No Encontrada)";
        break;
}