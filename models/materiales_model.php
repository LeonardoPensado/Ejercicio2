<?php

class materiales_model{
    private $db;
    private $materiales;

    public function __construct(){
        try {
            $this->db=Conectar::conexion();
            // $this->materiales=array();
        }
        catch(Exception $e) {
            die($e->getMessage());
        }
        
    }

    public function get_materiales(){
        // $consulta = $this->db->query("SELECT * FROM materiales;");
        // // var_dump($consulta->fetch_assoc());
        // while($filas=$consulta->fetch_assoc()){
        //     $this->materiales[]=$filas;
        // }
        // $this->materiales = $consulta->fetch_assoc();
        // return $this->materiales;
        
        $sql = "SELECT *, stock*precio as total from materiales";
        $result = $this->db->query($sql);
        $num_rows = $result->num_rows;

        $data = [];
        if ($num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
        }
    
        return $data;
    }

    public function  create_materiales($record){
        $sql = "INSERT INTO materiales('nombreMaterial','unidadMedida','precio','stock') 
        VALUES('" . $record['nombreMaterial'] . "','" . $record['unidadMedida'] . "','" . $record['precio'] . "','" . $record['stock'] . "')";
        $result = $this->db->query($sql);
        if($result){
            return true;
        } else {
            return false;
        }
    }
}