<?php
require_once("./models/materiales_model.php");


class materiales_controller {

    private $mat;

    public function __construct(){
        $this->mat = new materiales_model();
    }

    public function ver(){
        $datos = $this->mat->get_materiales();
        require_once("views/materiales_view.php");
    }

    public function crear($datos) {
        $nuevo = $this->mat->add_materiales($datos);
        $this->ver();
    }

    public function nuevoRegistro(){
        require_once("views/formulario.php");
    }

    public function eliminar($record) {
        $eliminado = $this->mat->delete_material($record['id']);
        $this->ver();
    }

    public function editar(){
        
    }

    public function buscar() {

    }
}
