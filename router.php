<?php


require_once './controllers/turnoFacil.controller.php';

require_once './controllers/auth.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}


$params = explode('/', $action);
switch ($params[0]) {
    case 'home':
        $controller = new TurnoFacilController();
        $controller->showHome();
        break;
    case 'medicos-a-cargo':
        $controller = new TurnoFacilController();
        $controller->showMedicsAssigned();
        break;

    case 'detalleMd':
        $controller = new TurnoFacilController();
        $controller->showDispByMedic($params[1]);
        break;





        /*Listo*/ 


        //form login
    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;

        //verifico login
    case 'verify': 
        $authController = new AuthController();
        $authController->login();
        break;

        //ciero session
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;

        /* CIERRRE DE Listo*/ 

        //muestra pantalla registro
    case 'register':
        $authController = new AuthController();
        $authController->showRegister();
    break;
    
        //crea registro
    case 'regUser':
        $authController = new AuthController();
        $authController->register();
    break;

    case 'crearDisp':
        $controller = new TurnoFacilController();
        $controller->showCreateDisp($params[1]);
    break;

    case 'altaDisp':
        $controller = new TurnoFacilController();
        $controller->altaDisp();
    break;



        /*

    */
}
