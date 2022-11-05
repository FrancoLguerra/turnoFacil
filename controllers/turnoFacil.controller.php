<?php

//incluir aca los modelos y las vistas
include_once('models/turnoFacil.models.php');
include_once('views/turnoFacil.view.php');
require_once 'helpers/auth.helper.php';

class TurnoFacilController{
    private $model;
    private $view;

    private $authHelper;

    public function __construct()
    {
        $this->model= new TurnoFacilModel();
        $this->view = new TurnoFacilView();
        $this->authHelper = new AuthHelper();

    }

     //MOSTRAR HOME
     public function showHome(){


        $this->view->showHome();

    }

    public function showMedicsAssigned(){
        
        $secretary = $_SESSION['USER_ID'];
        $medic = $this->model->getMedicsAssigned($secretary);

        $this->view->showMedicsAssigned($medic);

    }
 
    public function borrarDisp($id_turno, $id_medico){
        $this->model->borrarDisp($id_turno);
        header("Location: " . BASE_URL . "detalleMd/" . $id_medico);
    }
    
    public function showDispByMedic($id){
        
        
        $turns = $this->model->getDispByMedic($id);

        $this->view->showDispByMedic($turns);

    }


}