<?php
require_once ('models/user.model.php');
require_once 'views/auth.view.php';
require_once 'helpers/auth.helper.php';

class AuthController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new AuthView();
        $this->authHelper = new AuthHelper();
    }

    public function showLogin() {
        $this->view->showFormLogin();
    }
    public function showRegister(){
        $this->view->showFormRegister();
    }
    public function register(){
    
        if (!empty($_POST['nombre']) && !empty($_POST['password'])) {
            $nombre = $_POST['nombre'];
            $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user = $this->model->getUser($nombre);
            if ( $user ) {
                $this->view->showFormRegister("El email ya esta registrado");

            }else{
                // Agrego el usuario a la base de datos
                $this->model->regUser($nombre , $userPassword);
                header("Location: " . BASE_URL); 
            } 
        }
    }
    /**
     * Verifica si los datos del user son correctos
     */
    public function login() {
        if (!empty($_POST['nombre']) && !empty($_POST['password'])) {
            $nombre = $_POST['nombre'];
            $password = $_POST['password'];
            // Obtengo el usuario de la base de datos
            $user = $this->model->getUser($nombre);
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {
                 // armo la sesion del usuario
                $this->authHelper->login($user);
                header("Location: " . BASE_URL);
            } else {
                $this->view->showFormLogin("Usuario o contraseña inválida");
            }
        }
    }

    public function logout() {
        $this->authHelper->logout();
    }
}