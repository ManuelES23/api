<?php

namespace Controllers;

use Model\Albums;

class ApiController
{
    public static function mostrar()
    {
        $albums = Albums::all();

        echo json_encode($albums);
    }
    public static function guardar()
    {
        $albums = new Albums($_POST);
        $resultado = $albums->guardar();

        echo json_encode($resultado);
    }
}
