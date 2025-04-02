<h1>CRUD-MVC</h1>

<h2>Contenidos</h2>
<ul>
    <li><a href="#que-es-crud">¿Qué es un CRUD?</a></li>
    <li><a href="#que-es-mvc">¿Qué es Arquitectura MVC?</a></li>
    <li><a href="#tecnologias">Tecnologías y Lenguajes utilizados</a></li>
    <li><a href="#organizacion">Organización de Carpetas</a></li>
</ul>

<h2>Introducción</h2>

<h2 id="que-es-crud">¿Qué es un CRUD?</h2>

<p>CRUD es un acrónimo que representa las cuatro operaciones básicas que se pueden realizar en una base de datos o en cualquier sistema de almacenamiento de datos:</p>
<ul>
    <li>Create (Crear): Agregar nuevos registros o datos.</li>
    <li>Read (Leer): Consultar o recuperar datos almacenados.</li>
    <li>Update (Actualizar): Modificar datos existentes.</li>
    <li>Delete (Eliminar): Borrar datos de la base de datos.</li>
</ul>
<p>En el contexto de desarrollo web, un CRUD se refiere a una aplicación que permite gestionar datos mediante estas cuatro operaciones.</p>

<div style="text-align: center;">
    <img src="https://cdn.prod.website-files.com/5ff66329429d880392f6cba2/63fdf75ad4a978704fe9ac9c_CRUD%20%20Preview.jpeg" alt="CRUD" width="500">
</div>

<h2 id="que-es-mvc">¿Qué es Arquitectura MVC?</h2>

<p>La arquitectura MVC (Modelo-Vista-Controlador) es un patrón de diseño que organiza el código de una aplicación en tres capas principales para separar la lógica de negocio de la presentación y la interacción del usuario.</p>

<h4>Modelo</h4>
<ul>
    <li>Gestiona los datos y la lógica de negocio.</li>
    <li>Se comunica con la base de datos o archivos.</li>
    <li>No interactúa directamente con la interfaz de usuario.</li>
</ul>

<h4>Vista</h4>
<ul>
    <li>Representa la interfaz gráfica que ve el usuario.</li>
    <li>Se encarga de mostrar la información que recibe del Controlador.</li>
    <li>No contiene lógica de negocio.</li>
</ul>

<h4>Controlador</h4>
<ul>
    <li>Actúa como intermediario entre el Modelo y la Vista.</li>
    <li>Recibe solicitudes del usuario, procesa la información con ayuda del Modelo, y actualiza la Vista.</li>
</ul>

<div style="text-align: center;">
    <img src="https://www.freecodecamp.org/espanol/news/content/images/size/w1600/2021/06/MVC3.png" alt="MVC" width="500">
</div>

<h2 id="tecnologias">Tecnologías y Lenguajes utilizados</h2>
<ul>
    <li>XAMPP</li>
    <li>Visual Studio Code</li>
    <li>MySQL</li>
    <li>PHP</li>
    <li>HTML</li>
    <li>CSS</li>
    <li>.htaccess</li>
</ul>

<h2 id="organizacion">Organización de Carpetas</h2>

<ul>
    <li><b>Telefonos1 (Carpeta principal)</b></li>
    <br>
        <ul>
            <li><b>.htaccess: </b>Este archivo permite bloquear el acceso a los recursos de la carpeta principal. Cada que se requiera acceder a carpeta principal desde la URL automáticamente manda un mensaje de dice que no se tiene el permiso para acceder a ese recurso. </li><br>
            <li><b>app:</b> Dentro de esta carpeta se encuentra todo lo confidencial del programador, como por ejemplo códigos.</li><br>
                <ul>
                    <li><b>controller: </b>El controlador gestiona las operaciones CRUD de celulares. Obtiene y muestra registros, permite agregar, actualizar y eliminar celulares, y carga las vistas correspondientes. Se conecta a la base de datos para ejecutar consultas y reutiliza métodos para obtener datos según el ID.</li><br>
                    <li><b>model: </b>El modelo Celulares define la estructura de un celular con atributos como marca, modelo, color, precio y plan. Su constructor inicializa estos valores al crear una instancia, permitiendo representar y manejar datos de celulares dentro de la aplicación.</li><br>
                    <li><b>view: </b>Las vistas en el sistema CRUD-MVC proporcionan la interfaz para que el usuario interactúe con los datos.</li><br>
                    <li><b>.htaccess: </b>Evita el acceso a los recursos de la carpeta app.</li><br>
                    <li><b>celulares.sql: </b>Contiene la estructura de la tabla de Celulares de la base de datos.</li><br>
                    <li><b>conexion.php: </b>Establece la conexión con la base de datos celulares usando PDO en PHP. Define las credenciales de acceso (servidor, usuario y contraseña) y configura el modo de errores para manejar excepciones. Si la conexión falla, muestra un mensaje de error sin revelar información sensible.</li><br>
                </ul>
                <br>
            <li><b>public:</b>Contiene carpetas que pueden ser o no confidenciales. </li>
                <ul>
                    <li><b>CSS: </b>Contiene el diseño de las vistas.</li>
                    <li><b>imgs: </b>Contiene multimedias.</li>
                    <li><b>.htaccess: </b>El archivo .htaccess configura las reglas de reescritura en Apache para manejar URLs limpias en el sistema MVC. Activa el motor de reescritura, define la carpeta base (/public) y redirige todas las solicitudes a index.php.</li>
                    <li><b>index.php: </b>El archivo index.php maneja las solicitudes de la aplicación, ejecutando diferentes acciones (listar, agregar, editar, eliminar) en función de los parámetros de la URL. Incluye el controlador CelularesController.php y direcciona a los métodos correspondientes según la acción solicitada.</li>
                </ul>
        </ul>
</ul>



