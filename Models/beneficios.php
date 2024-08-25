<?php
    include_once("conexion.php");

    Class Beneficio{
        private $dbB;

        public function __construct(){
            $this->dbB = new DB();
        }   
    }
?>