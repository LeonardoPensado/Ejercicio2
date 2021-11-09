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
        $sql = "SELECT *, stock*precio as total from materiales";
        $result = $this->db->query($sql);
        $num_rows = $result->num_rows;

        $data = [];
        if ($num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
        }
    
        return $data;
    }

    public function  add_materiales($record){
        
        $sql = "INSERT INTO materiales(nombreMaterial,unidadMedida,precio,stock) 
        VALUES('" . $record['nombre'] . "','" . $record['unidad'] . "'," . $record['precio'] . "," . $record['stock'] . ")";
        try {
            $result = $this->db->query($sql);
        } catch(Exception $e){
            die($e->getMessage());
        }
        if($result){
            return true;
        } else {
            return false;
        }
    }

    public function delete_material($id){
        $sql = "DELETE FROM materiales WHERE id_Material = $id  AND stock = 0";
        $result = $this->db->query($sql);
        if($result){
            return true;
        } else {
            return false;
        }
    }

    public function search_material($id){
        $sql = "SELECT * FROM materiales WHERE id_Material = $id";
        $result = $this->db->query($sql);
        $num_rows = $result->num_rows;

        $data = [];
        if ($num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
        }
    
        return $data;
    }

    public function update_material($record){
        $sql = "UPDATE materiales SET nombreMaterial = '" . $record["nombre"] . "', unidadMedida = '" . $record["unidad"] . "', precio = " . $record["precio"] . ", stock = " . $record["stock"] . " WHERE id_Material = " . $record["id"];
        $result = $this->db->query($sql);
        if($result){
            return true;
        } else {
            return false;
        }
    }
}