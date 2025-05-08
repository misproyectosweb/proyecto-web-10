# Proyecto web 10: landing page taller automotriz

Esta es una landing page o página de aterrizaje

Este proyecto fue creado con las siguientes herramientas de nivel front-end y back-end:

- **HTML:**	Permite crear la estructura del sitio web mediante etiquetas
- **CSS:**	Para definir y crear la presentación del sitio web
- **Bootstrap:** Utilizado para personalizar el sitio web y adaptarlo a la pantalla del dispositivo usado por el usuario
- **PHP:**	Favorece la conexión entre los servidores y la interfaz de usuario
- **MySQL:** Gestor de bases de datos para almacenar los datos del usuario después de completar el formulario

Esta Landing Page o página web de aterrizaje fue creada y desarrollada usando la plataforma **NetBeans 12.0.** y el archivo **index.php** es el archivo que contiene la Landing Page

La página contiene dos secciones:

- La primera sección:
    -	Presenta una pantalla donde se muestra el servicio que se está ofreciendo al cliente
    -   Muestra un botón donde redirige al cliente a la segunda sección, el cual presenta los beneficios y servicios de la empresa

- La segunda sección:
    -	Presenta algunos de los beneficios que el cliente obtendrá al contratar los servicios del taller automotriz
    -	Muestra un botón que, al pulsarlo, le brinda acceso al sitio web del taller automotriz para que el cliente pueda conocer más acerca de la empresa
    -	Muestra un botón con un enlace para que el usuario pueda obtener el boletín mensual que pone la empresa a disposición del usuario para que conozca más información acerca del mundo automotriz
    -	Un formulario para que el cliente pueda comunicarse con el personal encargado del taller y poder concretar una cita de servicio

Para el formulario de contacto se programaron validaciones tanto del lado del cliente, implementando mensajes personalizados con clases integradas en Bootstrap, los cuales brindan acceso a las API de validación de formularios en JavaScript; así como validaciones del lado del servidor programado con el lenguaje de programación **PHP.**

La información del usuario ingresada en el formulario de contacto se envía a una base de datos creada en **MySQL** server utilizando la extensión **PHP Data Objects (PDO)**. Esta define una interfaz ligera y consistente para acceder a bases de datos en PHP, lo que significa que, independientemente de la base de datos que se esté utilizando, se emplean las mismas funciones para realizar consultas y obtener datos con un controlador específico.

Entre otras características que permite llevar a cabo esta interfaz podemos mencionar:
-	Se encarga de mantener la conexión a la base de datos y otro tipo de conexiones específicas como transacciones
-	Crea instancias de la clase **PDOStatement**, la cual maneja las sentencias SQL y devuelve los resultados. 
-	La clase **PDOException** se utiliza para manejar los errores.

Finalmente, se utiliza un mensaje de aviso personalizado para mostrar al usuario que su solicitud fue enviada con éxito o, por el contrario, tuvo un inconveniente y no se pudo enviar

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

![03  LandingPage_01](https://github.com/misproyectosweb/proyecto-web-10/assets/98922137/0d591f4d-a299-497e-b897-a9d494edf62f)
**==========================================================================**
![03  LandingPage_02](https://github.com/misproyectosweb/proyecto-web-10/assets/98922137/42e0ba31-5098-4bf4-a336-7537ba4b0bf2)
**==========================================================================**
![03  LandingPage_03](https://github.com/misproyectosweb/proyecto-web-10/assets/98922137/d28ad5bd-6bf7-469a-b680-9171c663e1e1)
**==========================================================================**
![03  LandingPage_04](https://github.com/misproyectosweb/proyecto-web-10/assets/98922137/1ab52aec-2034-4aec-a2eb-4d8a1c24676f)
**==========================================================================**
![03  LandingPage_05](https://github.com/misproyectosweb/proyecto-web-10/assets/98922137/b623c17c-4848-48fa-add5-3c3b799b06a7)
**==========================================================================**
![boletinTaller](https://github.com/misproyectosweb/proyecto-web-10/assets/98922137/7d371109-5f5b-4728-b978-315e4806f9bc)
**==========================================================================**
![msjConfirmacion](https://github.com/misproyectosweb/proyecto-web-10/assets/98922137/435ad439-74f4-46e1-942c-a88f79a9918b)
**==========================================================================**
![vistaCorreo](https://github.com/misproyectosweb/proyecto-web-10/assets/98922137/cc1a0d16-e445-4377-9187-32b3377a2640)
**==========================================================================**
![msjError](https://github.com/misproyectosweb/proyecto-web-10/assets/98922137/cf2c098d-c40b-4a36-bbfd-464471af8a31)
**==========================================================================**






