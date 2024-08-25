<?php
    include_once("conexion.php");

    Class Cita{
        private $dbC;

        public function __construct(){
            $this->dbC = new DB();
        }

        public function obtenerCitaPF($fecha){
            $res = array();
            $conexion = $this->dbC->conectar();

            $consulta = "CALL verCitaPF('{$fecha}')";
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
        public function obtenerUsuPidCit($idCita){
            $res = array();
            $conexion = $this->dbC->conectar();

            $consulta = "CALL obtenerUsuPidCit({$idCita})";
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
        public function obtenerCitaPU($usu){
            $res = array();
            $conexion = $this->dbC->conectar();

            $consulta = "CALL verEditables('{$usu}')";
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
        public function obtenerTodasCitas(){
            $res = array();
            $conexion = $this->dbC->conectar();

            $consulta = "CALL verTodasCitas()";
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

        public function obtenerCitasPUsu($usu){
            $res = array();
            $conexion = $this->dbC->conectar();

            $consulta = "CALL verCitasPUsuario('{$usu}')";
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
        public function obtenerCitabyId($cita){
            $res = array();
            $conexion = $this->dbC->conectar();

            $consulta = "CALL verCitaId('{$cita}')";
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
        public function agregarCita($usu,$fecha,$hora,$estado,$edit){
            $conexion = $this->dbC->conectar();

            $consulta = " CALL insertarCita({$usu},'{$fecha}','{$hora}','{$estado}',{$edit})";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }
        public function actualizarEstado($usu,$estado){
            $conexion = $this->dbC->conectar();

            $consulta = " CALL actualizarEstado({$usu},'{$estado}')";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }
        public function actualizarCita($idC,$usu,$fecha,$hora,$estado,$edit){
            $conexion = $this->dbC->conectar();

            $consulta = " CALL actualizarCita({$idC},{$usu},'{$fecha}','{$hora}','{$estado}',{$edit})";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }    
        public function cancelarCita($idC,$estado,$edit){
            $conexion = $this->dbC->conectar();

            $consulta = " CALL cancelarCita({$idC},'{$estado}',{$edit})";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        } 
    }
?>