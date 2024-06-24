# mvc-intro

Convención: dwd-v1.0.0.0

Manifiesto:

<ul>
<li>Las rutas http o URL’s siempre van hacia la página index.php</li>
<li>Se envía por la URL la variable view para solicitar una página especifica.</li>
<li>Ej: http://localhost/my-app/index.php?view=my-view</li>
<li>Las vistas son archivos con extensión php que están almacenados en la carpeta src/view</li> 
<li>Las vistas son archivos php que tienen mayormente código html</li>
<li>Las vistas deben terminar con la palabra View y la extensión php:</li>
	<p>nombreView.php</p>
<li>Los archivos se incluyen con rutas absolutas utilizando la función dirname(__FILE__)</li>
<li>Debe definir al menos la constante APP_ROOT en el archivo config.php como insumo para las rutas http que utilice la aplicación como por ejemplo los hipervinculos html.</li>
<li>Ej:a href="http://localhost/mvc-intro/index.php?view=formulario">Ingresar al formulario a </li>
<li>La constante APP_ROOT debe reemplazar la parte inicial de la URL
<li>Ej: a href=" <?= APP_ROOT . 'index.php?view=formulario' ?>">Ingresar al formulario a</li>
<li>La carpeta model almacena archivos php con estructuras de datos asociativos mapeadas con las tablas de la DB tipo ORM.</li>
<li>La carpeta controller almacena archivos php con funciones que son activadas por los formularios de las vistas.</li>
<li>Siempre un formulario en su atributo action envía los datos hacia un controller.</li>
<li>El controller es un artefacto de software diseñado principalmente para ser intermediario entre php y la base de datos sql</li>
<li>Los controladores son archivos php que están almacenados en la carpeta src/controller</li>
<li>Los controladores deben terminar con la palabra Controller y extensión php</li>
	<p>nombreController.php</p>
<li>La aplicación tiene un archivo de configuración de acceso ´.htaccess’</li>
<li>...</li>

</ul>
