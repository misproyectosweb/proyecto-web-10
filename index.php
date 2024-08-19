<!DOCTYPE html>

<!-- Creación de una Landing Page o página de aterrizaje para el taller de servicio automotriz con conexión a una 
     base de datos para almacenar los datos del formulario ingresados por el usuario -->

<html lang="es">
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconotools.png"/>
                
        <!-- Utilizando google fonts -->             
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
        <!-- Utilizando iconos -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/> 
        
        <!-- Archivos css -->
        <link href="css/inicio.css" rel="stylesheet" type="text/css"/>                     
    </head>
    <body class="imgFondo vh-100">
        
        <?php
            if(isset($_POST['nombre'])) {
                $nombre = filter_input(INPUT_POST, 'nombre');
                $correo = filter_input(INPUT_POST, 'correo');
                $direccion = filter_input(INPUT_POST, 'direccion');
                $telcasa = filter_input(INPUT_POST, 'telcasa');
                $telcelular = filter_input(INPUT_POST, 'telcelular');                
            } 
        ?>
                
        <div class="colorFondo vh-100">
            
            <!-- Encabezado de la página -->
            <header>
                <div class="py-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex flex-row justify-content-start">
                                <img src="imagenes/LogoTaller.png" class="img-fluid w-25" alt=""/>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex flex-row justify-content-end align-items-center">
                                <a href="https://www.facebook.com/" target="_blank"><i class="redes bi bi-facebook text-white mx-4"></i></a>                                                
                                <a href="https://web.whatsapp.com/" target="_blank"><i class="redes bi bi-whatsapp text-white mx-4"></i></a>
                                <a href="http://instagram.com/" target="_blank"><i class="redes bi bi-instagram text-white mx-4"></i></a>
                                <a href="http://www.youtube.com/" target="_blank"><i class="redes bi bi-youtube text-white mx-4"></i></a>
                            </div> 
                        </div>
                    </div>
                </div>    
            </header>

            <!-- Sección principal -->
            <main>            
                <div class="container-fluid py-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="text-center">
                                <img src="imagenes/imgServTaller_2.png" class="img-fluid w-50" alt=""/>
                                <h1 class="mb-0 pb-3 text-white">Confíe el cuidado de su automóvil con el mejor equipo</h1>
                                <h3 class="mb-0 pb-4 text-white">Registrate y reserva una cita de servicio con nosotros</h3>
                                <div>
                                    <a class="btn btn-primary btn-lg" href="contacto.php" role="button">Conoce más de nuestros beneficios</a>
                                </div>                             
                            </div>
                        </div>                    
                    </div>                                
                </div>                                                                                            
            </main>
        </div>
        
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
                                                                 
        <?php
            // put your code here
        ?>
    </body>
</html>