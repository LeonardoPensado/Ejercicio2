<?php

    class Conectar {
        public static function conexion(){

            // $dbhost = 'localhost';
            // $dbuser = 'root';
            // $dbpass = '';
            // $dbname = 'dbcruzazul';

            // $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);

            // if(! $conn ) {
            //     die('gg la conexión: ' . mysql_error());
            // }
            $conexion = new mysqli("localhost", "root", "", "dbcruzazul");
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }
    }