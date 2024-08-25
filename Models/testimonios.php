<?php
    include_once("conexion.php");

    Class Testimonio{
        private $dbT;

        public function __construct(){
            $this->dbT = new DB();
        }   
    }
?>