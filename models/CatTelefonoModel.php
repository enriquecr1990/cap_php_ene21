<?php

include_once('ConfigDB.php');

class CatTelefonoModel
{
    private $mysqli;

    function __construct()
    {
        //$this->configDB = ConfigDB::getConfig();
        $this->mysqli = new mysqli(
            'localhost',
            'root',
            '',
            'capacitacion_soft',
            '3306'
        );
        if($this->mysqli->connect_errno){
            echo 'No fue posible conectarme a la base de datos';die;
        }
        //parent::__construct();
    }

    public function obtenerCatalogo(){
        //codigo nativo con mysqli
        $query = $this->mysqli->query('select * from catalogo_telefono');
        $result = array();
        $indexRegistro = 0;
        while($row = $query->fetch_assoc()){
            foreach ($row as $columna => $valor){
                $result[$indexRegistro][$columna] = $valor;
            }
            $indexRegistro++;
        }

        /*$catalogo = array(
            array('id_catalogo_telefono' => 1,'tipo' => 'Celular'),
            array('id_catalogo_telefono' => 2,'tipo' => 'Casa'),
            array('id_catalogo_telefono' => 3,'tipo' => 'Oficina'),
            array('id_catalogo_telefono' => 4,'tipo' => 'Casa chica'),
        );*/
        /*$this->consulta('select * from catalogo_telefono');
        $catalogo = $this->procesarResultadoArray();
        parent::__destruct();*/
        $catalogo = $result;
        return $catalogo;
    }

}