<!DOCTYPE html>

<!-- Creación de una Landing Page o página de aterrizaje para el taller de servicio automotriz -->

<html lang="es">
    <head>
        <title>Taller Enterprise</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconotools.png"/>
                
        <!-- Utilizando google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

        <!-- Utilizando Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
        <!-- Utilizando iconos -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/> 
        
        <!-- Archivos css -->
        <link href="css/inicio.css" rel="stylesheet" type="text/css"/>                     
    </head>
    <body>
        <?php
            if(isset($_POST['nombre'])) {
                $nombre = filter_input(INPUT_POST, 'nombre');
                $correo = filter_input(INPUT_POST, 'correo');
                $direccion = filter_input(INPUT_POST, 'direccion');
                $telcasa = filter_input(INPUT_POST, 'telcasa');
                $telcelular = filter_input(INPUT_POST, 'telcelular');                
            } 
        ?>
        
        <!-- ****************************************************************************************************************************************** -->
        
        <main>            
            <div class="container-fluid imgFondo">
                <div class="row" style="background-color: rgba(0, 0, 0, 0.4);">                    
                    <div class="col-12 d-flex flex-row justify-content-between align-items-center py-4">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex flex-row justify-content-start">
                            <img src="imagenes/LogoTaller.png" class="img-fluid w-75" alt=""/>
                        </div>  
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex flex-row justify-content-end">
                            <a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook text-white mx-4"></i></a>                                                
                            <a href="https://web.whatsapp.com/" target="_blank"><i class="bi bi-whatsapp text-white mx-4"></i></a>
                            <a href="http://instagram.com/" target="_blank"><i class="bi bi-instagram text-white mx-4"></i></a>
                            <a href="http://www.youtube.com/" target="_blank"><i class="bi bi-youtube text-white mx-4"></i></a>
                        </div>                        
                    </div>
                </div>
                <div class="row colorFondo justify-content-center py-4">
                    <div class="text-center">
                        <img src="imagenes/imgServTaller_2.png" class="img-fluid w-50" alt=""/>
                        <h1 class="mb-0 titulo text-white font-weight-bold pb-2">Confíe la reparación de su automóvil con el mejor equipo</h1>
                        <h3 class="mb-0 subtitulo text-white pb-2">Registrate y reserva una cita de servicio con nosotros</h3>
                        <div class="pt-4">
                            <a class="btn btn-primary btn-lg" href="contacto.php" role="button">Comienza desde ahora</a>
                        </div>                             
                    </div>
                </div>
            </div>                                             
        </main>
                
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
                                                                 
        <?php
            // put your code here
        ?>
    </body>
</html>