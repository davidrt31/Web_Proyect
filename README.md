# Web_Proyect 

Recordar: 
Si quieres entrar al proyecto para visualizarlo, primero deberás crear una base de datos en tu phpMyAdmin con el nombre: "dongilbd" e importar la base de datos mostrada en el repositorio. Luego de esto, tendrás colocar el proyecto con el nombre tal cual está en tu carpeta de htdocs. Tener en cuenta que debes de tener xampp instalado en la carpeta 'C:// '

Versión: 1.1.0 del Proyecto Web "Tiendita Don Gil"

Cambios hechos:
- Actualización de Base de datos completa.
- Se agregaron todas las imagenes de los productos en el proyecto.
- Cambio de identificadores de atributos de la base de datos en models productos y usuarios. ([img_prod] -> ['imagen']).
- Validacion de login de usuario en página login.
- Validación de registro de usuario en página login.
-Validación de sesión usuario (Respuesta se agregó mensaje de bienvenida en el navbar mientras la sessión esta iniciada).
- Validación de cierre se sesión (Se agrego boton en la lista desplegable del navbar del header).
- Se creo carpeta utils dentro de la ruta: /views/site/.
- Se colocó la dirección en todas las anclas de las categorias de productos en el index.php, así como en el navbar del apartado de productos.php (En la dirección se envía el tipo de categoria a través de una variable 'GET' en la url: ?=categoria=BEBIDAS)


