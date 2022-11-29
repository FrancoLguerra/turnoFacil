<?php
include_once('libs/smarty-master/libs/Smarty.class.php');

class TurnoFacilView{
    
    private $smarty;
    
    public function __construct()
    {
        $this->smarty = new Smarty() ;
    }
    
    function showHome(){
    
        $this->smarty->display('./templates/home.tpl');
    }

    
    function showMedicsAssigned($medics){

        $this->smarty->assign('medics', $medics);
        $this->smarty->display('./templates/list_medic.tpl');

    }
    function showDispByMedic($turns, $id){
        $this->smarty->assign('turns', $turns);
        $this->smarty->assign('id', $id);
        $this->smarty->display('./templates/list_disp_turnos.tpl');
    }

    function showCreateDisp($id = 1){
        $this->smarty->assign('id', $id);
        $this->smarty->display('./templates/crear_disp_turnos.tpl');
    }
    
    /* IMS-22 vista para modificar disponibilidad de turnos */
    function showUpdateDisp($turno) {
        $this->smarty->assign('titulo', 'Modificando Turno');	
        $this->smarty->assign('turno', $turno);
        $this->smarty->display('./templates/modificando_turno.tpl');
    }

    function showFormAddTurno($medics){
        $this->smarty->assign('medics', $medics);
        $this->smarty->display('./templates/show_form_add_turno.tpl');
    }

    function showTurns($turns){
        $this->smarty->assign('turns', $turns);
        $this->smarty->display('./templates/show_turns.tpl');

    }
    function showError($mensaje){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('./templates/error.tpl');

    }
}