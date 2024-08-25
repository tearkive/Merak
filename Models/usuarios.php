<?php
    include_once("conexion.php");

    Class Usuario{
        private $dbU;

        public function __construct(){
            $this->dbU = new DB();
        }   

        public function usuarioExiste($usu){
            $query = "CALL usuarioExiste('{$usu}')";
            $conexion = $this->dbU->conectar();
            $res = $conexion->query($query);
            if($res->num_rows != 0){
                return true;
            }else{
                return false;
            }
        }

        public function usuarioValido($usu, $pass){
            $query = "CALL obtenerUsuario('{$usu}','{$pass}')";
            $conexion = $this->dbU->conectar();
            $res = $conexion->query($query);
            if($res->num_rows != 0){
                return true;
            }else{
                return false;
            }
        }
        public function usuarioAdministrador($usu){
            $query = "CALL usuarioAdministrador({$usu})";
            $conexion = $this->dbU->conectar();
            $res = $conexion->query($query);
            if($res->num_rows != 0){
                return true;
            }else{
                return false;
            }
        }
        public function usuarioProfesional($usu){
            $query = "CALL usuarioProfesional({$usu})";
            $conexion = $this->dbU->conectar();
            $res = $conexion->query($query);
            if($res->num_rows != 0){
                return true;
            }else{
                return false;
            }
        }

        public function agregarUsuario($nombre,$apellidos,$fecha,$telefono,$correo,$contraseña){
            $conexion = $this->dbU->conectar();

            $consulta = " CALL agregarUsuario('{$nombre}','{$apellidos}','{$fecha}',{$telefono},'{$correo}','{$contraseña}')";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }
        public function actualizarUsuario($usu,$nombre,$apellidos,$fecha,$telefono,$correo){
            $conexion = $this->dbU->conectar();

            $consulta = " CALL actualizarUsuario({$usu},'{$nombre}','{$apellidos}','{$fecha}',{$telefono},'{$correo}')";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }
        public function actualizarPass($correo,$pass){
            $conexion = $this->dbU->conectar();

            $consulta = " CALL actualizarPass('{$correo}','{$pass}')";
            $resultado = $conexion->query($consulta);
            
            $conexion->close();
        }
        public function obtenerUltUsuario(){
            $res = array();
            $conexion = $this->dbU->conectar();

            $consulta = "CALL obtenerInfoUlt()";
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
        public function setUsuario($usu){
            $res = array();
            $conexion = $this->dbU->conectar();

            $consulta = "CALL setUsuario({$usu})";
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
        public function obtenerUsuario($correo,$password){
            $res = array();
            $conexion = $this->dbU->conectar();

            $consulta = "CALL obtenerUsuario('{$correo}', '{$password}')";
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