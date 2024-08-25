<?php
    include_once("conexion.php");

    Class Profesional{
        private $dbPr;

        public function __construct(){
            $this->dbPr = new DB();
        }   
        public function agregarProfesional($idusu,$cedula, $fecha){
            $conexion = $this->dbPr->conectar();

            $consulta = " CALL agregarProfesional({$idusu},'{$cedula}','{$fecha}')";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }
        public function eliminarProfesional($idusu){
            $conexion = $this->dbPr->conectar();

            $consulta = " CALL eliminarProfesional({$idusu})";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }
        public function verProfesionales(){
            $res = array();
            $conexion = $this->dbPr->conectar();

            $consulta = "CALL verProfesionales()";
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