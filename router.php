<?php


require_once './controllers/turnoFacil.controller.php';

require_once './controllers/auth.controller.php';

// document root
define ('DOCUMENT_ROOT', '/' . $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']) . '/');

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

    case 'borrarDisp':
        $controller = new TurnoFacilController();
        $controller->borrarDisp($params[1], $params[2]);
        break;

    case 'detalleMd':
        $controller = new TurnoFacilController();
        $controller->showDispByMedic($params[1]);
        break;

    /* IMS-22 modificar turnos disponibles por medico */
    case 'modificarDisp':
        $controller = new TurnoFacilController();
        $controller->modifyDispByMedic($params[1], $params[2]);
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



    //show forms add Turno
    
    case 'formTurno';

        $controller = new TurnoFacilController();
        $controller->showFormAddTurno();

    break;

    //add turno --> Secretaria ->addTurno

   
    case 'addTurno';

        $controller = new TurnoFacilController();
        $controller->addTurno();

    break;

    //Show turnosByMedicos
    case 'showTurns':
        if(isset($params[1])){
            $controller = new TurnoFacilController();
            $controller->showTurns($params[1]);
        }else{
            $controller = new TurnoFacilController();
            $controller->showTurns();
        }
    break;  
    case 'turnosFiltrados':
        $controller = new TurnoFacilController();
        $controller->turnosMañanaTarde($params[1]);
        break; 

    default: 
        echo('404 Page not found');
    break;



    
}

?>