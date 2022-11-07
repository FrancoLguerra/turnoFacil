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


}