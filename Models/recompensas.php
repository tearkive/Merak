<?php
    include_once("conexion.php");

    Class Recompensa{
        private $dbR;

        public function __construct(){
            $this->dbR = new DB();
        }
        public function verRecompensasPUsu($usu){
            $res = array();
            $conexion = $this->dbR->conectar();

            $consulta = "CALL verRecompensasPUsu({$usu})";
            $resultado = $conexion->query($consulta);

            if($resultado->num_rows != 0){  
                while ($fila = $resultado->fetch_assoc()) {
                    $res[] = $fila; // Agregar cada fila al arreglo de resultados
                }
                $conexion->close();
                return json_encode($res);   
            }else{
                $conexion->close();
                return json_encode($res);
            }
        }
        public function agregarRecompensas($usu,$bene){
            $conexion = $this->dbR->conectar();

            $consulta = " CALL agregarRecompensas({$usu},{$bene})";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }    
    }
?>