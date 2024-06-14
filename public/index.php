<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\ApiController;
use MVC\Router;

$router = new Router();

$router->get('/', [ApiController::class, 'mostrar']);
$router->post('/guardar', [ApiController::class, 'guardar']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
