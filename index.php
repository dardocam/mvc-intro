<?php

//incluye el archivo de configuración para acceder a las constantes ej: APP_SRC
require_once(dirname(__FILE__) . '/private/config/config.php');

//la pagina index.php va a funcionar como un router
//la estructura switch recibe por la url la variable 'view' con la semantica de la vista a rutear.
$request = $_SERVER['REQUEST_METHOD'];

//verifica que el metodo de la request sea tipo get
if ($request == 'GET') {
    //verifica que recibe una pagina en la variable 'view' por ej: http://localhost/mvc-template/index.php?view=dashboard
    if (isset($_GET['view'])) {
        $pagina = $_GET['view'];
    } else {
        $pagina = '';
    }

    switch ($pagina) {
        case 'formulario':
            //incluye la vista formulario
            require_once(APP_SRC . '/view/formularioView.php');
            break;

        default:
            //incluye la vista welcome
            require_once(APP_SRC . '/view/welcomeView.php');
            break;
    }
}

//verifica que el metodo de la request sea tipo post
if ($request == 'POST') {
    //verifica que recibe un controlador en la variable 'controller' por ej: http://localhost/mvc-template/index.php?controller=formulario
    if (isset($_GET['controller'])) {
        $controlador = $_GET['controller'];
    } else {
        $controlador = '';
    }

    switch ($controlador) {
        case 'formulario':
            //incluye la vista formulario
            require_once(APP_SRC . '/controller/formularioController.php');
            break;
    }
}
