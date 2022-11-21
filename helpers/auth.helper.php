<?php

class AuthHelper {
    function __construct() {
        // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
 /*   public function logAdmin($user){
        $_SESSION['ADMIN_ID'] = $user->id_user;
        
        
        $_SESSION['USER_EMAIL'] = $user->email;
    }*/
    
    public function login($user) {
        $_SESSION['USER_ID'] = $user->id_usuario;
        $_SESSION['USER_NOMBRE'] = $user->nombre_usuario;
        $_SESSION['USER_ROL'] = $user->rol_usuario;
    }

    public function checkLoggedIn() {
        if (empty($_SESSION['USER_ID'])) {
            header("Location: " . LOGIN);
            die();
        }
    }

    function logout() {
        session_destroy();
        header("Location: " . BASE_URL );
        die();
    } 
}