<!DOCTYPE html>

<!-- Página de contacto  -->

<html lang="es">
    <head>
        <title>Contacto</title>
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
        <link href="css/contacto.css" rel="stylesheet" type="text/css"/>
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
            <div id="beneficios" class="container-fluid bg-light">
                <div class="py-5">
                    <h1 class="mb-0 text-center text-uppercase font-weight-bold py-3 border border-secondary rounded-pill w-75 mx-auto">nuestros beneficios</h1>
                </div>
                <div class="row justify-content-center border-dark-50 border-bottom py-4">
                    <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-3">
                        <div class="d-flex flex-row align-items-center">                        
                            <img src="imagenes/towTruckAzul48x48.png" class="img-fluid mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Servicio de asistencia:</small><br><small>Despreocúpese si se le presenta alguna falla mecánica. Nuestro servicio de grúa está disponible cuando usted lo necesite, las 24 horas del día, los 7 días de la semana. Sin costo adicional</small></p>
                        </div>                                                
                    </div>
                    <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-3">
                        <div class="d-flex flex-row align-items-center">
                            <img src="imagenes/qualityAzul48x48.png" class="img-fluid mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Calidad en cada trabajo:</small><br><small>Procuramos siempre revisar cada trabajo realizado de manera minuciosa, no dejando ningún detalle sin terminar. Nos aseguramos ques usted reciba un trabajo de calidad</small></p>
                        </div>
                    </div>
                    <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-3">
                        <div class="d-flex flex-row align-items-center">
                            <img src="imagenes/paperAzul48x48.png" class="img-fluid mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Trámites con su aseguradora:</small><br><small>En nuestra oficina le ayudaremos a gestionar sus trámites con la empresa aseguradora a la que usted esta afiliado. Procuramos en todo momento eficacia y eficiencia en su trámite</small></p>
                        </div>
                    </div>
                    <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-3">
                        <div class="d-flex flex-row align-items-center">
                            <img src="imagenes/workerAzul48x48.png" class="img-fluid mr-3">
                            <p class="text-secondary text-justify"><small class="font-weight-bold">Personal especializado:</small><br><small>Nuestro personal altamente calificado, utiliza lo último en tecnología, para diagnosticar y reparar las partes de su automóvil que lo requieran</small></p>
                        </div>
                    </div>
                </div>

                <!-- ****************************************************************************************************************************************** -->

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center border-dark-50 border-right">
                        <div class="pt-5">
                            <h3 class="mb-0">Visítanos y conoce más de cerca nuestra empresa</h3>
                            <div class="py-4">
                                <a class="btn btn-primary btn-lg" href="https://misproyectosweb.github.io/sitiowebtallerautos.github.io/" target="_blank" role="button">Accede a nuestro sitio web</a>
                            </div>
                        </div>
                        <div class="pt-5">
                            <h3 class="mb-0">Recibe gratis nuestro boletin informativo mensual</h3>
                            <div class="py-4">
                                <a class="btn btn-primary btn-lg" href="documentos/Boletin_mecanico_profesional.pdf" target="_blank" role="button">Consíguelo aquí</a>
                            </div>
                        </div>
                        <div class="py-4">
                            <img src="imagenes/imgServTaller_4.png" class="img-fluid w-75" alt=""/>
                        </div>
                    </div>

                    <!-- ****************************************************************************************************************************************** -->

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">                        
                        <form action="insertarDatos.php" method="post" id="formulario" class="needs-validation d-flex justify-content-center py-5" novalidate>
                            <div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-10 border border-dark-50 rounded-lg text-dark font-weight-bold p-4">
                                <h1 class="mb-0 pb-2 text-center text-dark font-weight-bold">¡Contáctanos!</h1>
                                <h3 class="mb-0 text-center text-dark font-weight-bold">Es fácil, sencillo y rápido</h3>
                                <hr class="border-dark-50 my-4">
                                <div class="form-group">
                                    <label for="nombre">Nombre completo:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo. Ingresa tu nombre y dos apellidos</div>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@ejemplo.com" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo. Ingresa una dirección de correo válida</div>
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" value="" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo. Ingresa tu lugar de residencia</div>
                                </div>
                                <div class="form-group">
                                    <label for="telcasa">Teléfono casa:</label>
                                    <input type="tel" class="form-control" id="telcasa" name="telcasa" value="" placeholder="22334455" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo. No ingreses letras, espacios ni símbolos</div>
                                </div>
                                <div class="form-group">
                                    <label for="telcelular">Teléfono celular:</label>
                                    <input type="tel" class="form-control" id="telcelular" name="telcelular" value="" placeholder="88776655" required>
                                    <div class="valid-feedback is-valid">¡OK, válido!</div>
                                    <div class="invalid-feedback is-invalid">Completa el campo. No ingreses letras, espacios ni símbolos</div>
                                </div>

                                <input type="submit" id="boton" class="btn btn-primary mt-4 btn-lg" name="enviar" value="Solicita tu servicio de inmediato">
                            </div> 

                            <!-- ****************************************************************************************************************************************** -->

                            <?php
                                require 'validaciones.php';
                            ?>
                        
                        </form>                        
                    </div>
                </div>                                               
            </div>
        </main>
        
        <!-- Código JavaScript aplicados al formulario -->
        <script>        
            // Función que permite la deshabilitación del envío de datos en formularios si hay campos inválidos
            (function() {
                'use strict';
                window.addEventListener('load', function() {

                    // Obtener todos los formularios a los que queremos aplicar estilos de validación personalizados
                    var forms = document.getElementsByClassName('needs-validation');

                    // Recorre los formularios y evita que el form se envíe de forma inmediata
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                        form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();                 
        </script>
                                
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        
        <?php
            // put your code here
        ?>
    </body>
</html>
