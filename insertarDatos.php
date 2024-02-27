<?php

    // Requerimos la clase con los datos de la conexión
    require_once 'conectar.php';
    
    // Creamos una instancia de la clase
    $datos = new acceso();
    
    // Recibimos los datos ingresados a los campos
    $nombre = filter_input(INPUT_POST, 'nombre');
    $correo = filter_input(INPUT_POST, 'correo');
    $direccion = filter_input(INPUT_POST, 'direccion');
    $telcasa = filter_input(INPUT_POST, 'telcasa');
    $telcelular = filter_input(INPUT_POST, 'telcelular');                   
    
    // Creamos la consulta para insertar datos
    $consulta = "INSERT INTO datosclientes(Nombre, Correo, Direccion, Telefono_casa, Telefono_celular) VALUES (:nombre, :correo, :direccion, :telcasa, :telcelular)";
                                  
    $parametros = array(':nombre' => $nombre, ':correo' => $correo, ':direccion' => $direccion, ':telcasa' => $telcasa, ':telcelular' => $telcelular);
        
    try {
        
        // La variable almacena el resultado de la ejecución de la consulta
        $resultado = $datos->ejecutarConsulta($consulta, $parametros);
        
        if($resultado >= 0) {
            
//        echo '<script>'.'location.href="index.php"'. '</script>';
            
            include 'msgConfirmacion.php';
            
        }
        else {
            
//        echo '<script>'.'location.href="index.php"'. '</script>';
            
            include 'msgError.php';
        }                                              
    }
    catch (Exception $e) {
        echo "Código del error: " . $e->getCode();
        echo "<br>";
        echo 'Mensaje del error: ' . $e->getMessage();
        echo '<br>';
        echo "Línea del error: " . $e->getLine();
    }