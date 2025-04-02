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
    <li>Telefonos1 (Carpeta principal)
        <ul>
            <li><b>.htaccess:<b> Este archivo permite bloquear el acceso a los recursos de la carpeta principal. Cada que se requiera acceder a carpeta principal desde la URL automáticamente manda un mensaje de dice que no se tiene el permiso para acceder a ese recurso. </li>
            <li>app
                <ul>
                    <li>controller</li>
                    <li>model</li>
                    <li>view</li>
                    <li>.htaccess</li>
                    <li>celulares.sql</li>
                    <li>conexion.php</li>
                </ul>
            </li>
            <li>public
                <ul>
                    <li>CSS</li>
                    <li>imgs</li>
                    <li>.htaccess</li>
                    <li>index.php</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>



