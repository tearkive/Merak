<?php
    include_once("conexion.php");

    Class Sello{
        private $dbS;

        public function __construct(){
            $this->dbS = new DB();
        }
        public function obtenerSellosU($usu){
            $res = array();
            $conexion = $this->dbS->conectar();

            $consulta = "CALL sellosUsu({$usu})";
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
        public function cantidadSellosByUsu($usu){
            $res = array();
            $conexion = $this->dbS->conectar();

            $consulta = "CALL cantidadSellosByUsu({$usu})";
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
        public function agregarSellos($cita,$fecha){
            $conexion = $this->dbS->conectar();

            $consulta = " CALL agregarSellos({$cita},'{$fecha}')";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }    
    }
?>