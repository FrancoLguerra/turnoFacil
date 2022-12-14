<?php
include_once('libs/smarty-master/libs/Smarty.class.php');

class AuthView {
    private $smarty; 

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showFormLogin($error = null) {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formLogin.tpl');
    }

    function showFormRegister($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/register.tpl');
    }

}