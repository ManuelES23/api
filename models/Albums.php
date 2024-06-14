<?php 

namespace Model;

class Albums extends ActiveRecord {
    protected static $tabla = 'albums';
    protected static $columnasDB = ['id', 'artista', 'titulo', 'fecha_lanzamiento', 'num_canciones'];

    public $id;
    public $artista;
    public $titulo;
    public $fecha_lanzamiento;
    public $num_canciones;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->artista = $args['artista'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->fecha_lanzamiento = $args['fecha_lanzamiento'] ?? '';
        $this->num_canciones = $args['num_canciones'] ?? '';
    }
}