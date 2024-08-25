<?php
    include_once("conexion.php");

    Class Paciente{
        private $dbP;

        public function __construct(){
            $this->dbP = new DB();
        } 
        public function agregarPaciente($idusu,$frecuencia){
            $conexion = $this->dbP->conectar();

            $consulta = " CALL agregarPaciente({$idusu},'{$frecuencia}')";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }
        public function obtenerPacientes(){
            $res = array();
            $conexion = $this->dbP->conectar();

            $consulta = "CALL verPacientes()";
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
    }
?>