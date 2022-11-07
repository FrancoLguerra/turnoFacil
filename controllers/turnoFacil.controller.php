<?php

//incluir aca los modelos y las vistas
include_once('models/turnoFacil.models.php');
include_once('views/turnoFacil.view.php');
require_once 'helpers/auth.helper.php';

class TurnoFacilController{
    private $model;
    private $view;
    private $helper;
    private $authHelper;

    public function __construct() {
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

        $this->view->showDispByMedic($turns, $id);
    }

    public function showCreateDisp($id) {
        $turns = $this->model->getDispByMedic($id);

        $this->view->showCreateDisp($id);
    }

    public function altaDisp() {
        $id_medico = $_REQUEST['id_medico'];
        $horario_inicio = $_REQUEST['horario_inicio'];
        $horario_fin = $_REQUEST['horario_fin'];
        $dia = $_REQUEST['dia'];

        $this->model->altaDisp($id_medico, $horario_inicio, $horario_fin, $dia);
        header("Location: " . BASE_URL . "detalleMd/$id_medico");
    }

    /* IMS-22 func desde el controller para modificar un turno de disponibilidad medico desde el modelo */
    public function modifyDispByMedic($id_turno, $id_medico) {
        // Si ya se mandaron los campos
        if ( (isset($_GET['horario_inicio']) || !empty($_GET['horario_inicio'])) && (isset($_GET['horario_fin']) || !empty($_GET['horario_fin'])) ) {
            $new_inicio = $_GET['horario_inicio']; 
            $new_fin = $_GET['horario_fin'];
            $this->model->alterTurno($id_turno, $new_inicio, $new_fin);
            // vuelve atras
            $this->showDispByMedic($id_medico);
        }
        else {
            $turno = $this->model->getTurno($id_turno);
            $this->view->showUpdateDisp($turno); 
        }
    }


}