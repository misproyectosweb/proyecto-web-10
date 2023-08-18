<?php

    require_once 'parametros.php';

    class acceso {
       
        // Creamos las variables de conexión
        private $cadenaConexion;    // Contiene los datos de la conexión que se va a realizar
        private $conexion;          // Contiene los datos de la conexión hacia la base de datos. Es el puente o vínculo
        
        // El constructor se va a encargar de realizar
        public function __construct() {
            try {
                // Se concatenan los datos de la conexión
                $this->cadenaConexion = "mysql:host=".SERVIDOR.";port=".PUERTO.";dbname=".DATOS.";charset=".ACENTOS;
                
                // Creamos la conexión albergada a través de una instancia de la clase PDO
                $this->conexion = new PDO($this->cadenaConexion, USUARIO, CLAVE);
                
                // Mensaje que indica si la conexión fue exitosa
                // echo 'Conexión exitosa';
            }
            catch (Exception $e){
                echo 'Código del error: ' . $e->getCode();
                echo '<br>';
                echo 'Mensaje del error: '.$e->getMessage();
                echo '<br>';
                echo 'Línea del error: ' . $e->getLine();
            }
        } 
                        
        // Crear una función que permita realizar la inserción y verificar si se ha realizado o no
        // Implementamos un método de clase que nos permite recibir una consulta, procesarla y devolver una respuesta
        // La consulta que se recibe como parámetro tendrá por defecto el valor de vacío en el caso de que no se pase
        public function ejecutarConsulta($sql="", $valores = array()){
            
            // Comprobamos que el parámetro contenga la consulta y además verificamos la longitud de la consulta
            if($sql != "" && strlen($sql) > 0) {
                     
                // En caso de que ocurra alguna excepción se va a retornar el correspondiente error
                try {                    
                    // Se debe indicar que de la conexión se va a iniciar una transacción para posteriormente confirmar
                    // o regresar a una estado anterior
                    $this->conexion->beginTransaction();
                    
                    // Se prepara la sentencia para ser ejecutada posteriormente y nos devolverá un PDO STATEMENT, lo que
                    // vendría a ser una consulta PDO
                    $consulta = $this->conexion->prepare($sql);
                    
                    // En esta línea de código se ejecuta la sentencia; en este caso, la consulta sql, y por lo tanto, tiene
                    // que devolver un resultado
                    $consulta->execute($valores);
                    
                    // Si el objeto tiene un error en cuanto a la preparación de la consulta obtendremos los datos mediante
                    // el método errorCode(). Este nos va a mostrar un código de error asociado a la preparación de la consulta
                    if(intval($consulta->errorCode()) === 0) {
                        
                        // Confirmar la acción realizada
                        $this->conexion->commit();
                        
                        // Creamos una variable que nos permita obtener la cantidad de filas afectadas a través de la ejecución
                        // de esta consulta
                        $filasAfectadas = $consulta->rowCount();
                        
                        // Retornamos los datos de la consulta al archivo desde donde será llamado
                        return $filasAfectadas;
                    }
                    else {
                        // Permite regresar a un estado anterior
                        $this->conexion->rollBack();
                        
                        // Este valor va a servir para indicar que ocurrió un problema
                        return -1;
                    }
                }
                catch (Exception $e) {
                    
                    // Permite regresar a un estado anterior
                    $this->conexion->rollBack();
                    
                    // Este método nos va a mostrar la información del error
                    return $e->getMessage();
                }                                         
            }
            else {
                
                // Cuando se ejecuta una consulta, retornar 0 significa que no se ha obtenido nada, una respuesta en falso
                return 0;
            }
        }
    }
    
    // Cuando se desea hacer un registro, una actualización o una eliminación, por detrás estamos realizando una
    // transacción. Esta es un conjunto de órdenes que tienen que ejecutarse todas o no se ejecuta ninguna. Para
    // controlar esas acciones se implementa un commit o un rollback. Un commit es una función que nos permite
    // confirmar los cambios y un rollback es una función que nos permite regresar a un estado anterior antes de
    // iniciar la transacción