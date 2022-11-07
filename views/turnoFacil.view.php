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
    
}