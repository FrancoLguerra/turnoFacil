<?php

//incluir aca los modelos y las vistas
include_once('models/turnoFacil.models.php');
include_once('views/turnoFacil.view.php');
require_once 'helpers/auth.helper.php';

class TurnoFacilController
{
    private $model;
    private $view;
    private $helper;
    private $authHelper;

    public function __construct()
    {
        $this->model = new TurnoFacilModel();
        $this->view = new TurnoFacilView();
        $this->authHelper = new AuthHelper();
    }

    //MOSTRAR HOME
    public function showHome()
    {
        $this->view->showHome();
    }

    public function showMedicsAssigned()
    {

        $id_usuario = $_SESSION['USER_ID'];
        $medic = $this->model->getMedicsAssigned($id_usuario);

        $this->view->showMedicsAssigned($medic);
    }

    public function borrarDisp($id_turno, $id_medico)
    {
        $this->model->borrarDisp($id_turno);
        header("Location: " . BASE_URL . "detalleMd/" . $id_medico);
    }

    public function showDispByMedic($id)
    {
        $turns = $this->model->getDispByMedic($id);

        $this->view->showDispByMedic($turns, $id);
    }

    public function showCreateDisp($id)
    {
        $turns = $this->model->getDispByMedic($id);

        $this->view->showCreateDisp($id);
    }

    public function altaDisp()
    {
        $id_medico = $_REQUEST['id_medico'];
        $horario_inicio = $_REQUEST['horario_inicio'];
        $horario_fin = $_REQUEST['horario_fin'];
        $dia = $_REQUEST['dia'];
        $duracion = $_REQUEST['duracion'];

        $this->model->altaDisp($id_medico, $horario_inicio, $horario_fin, $dia, $duracion);
        header("Location: " . BASE_URL . "detalleMd/$id_medico");
    }

    /* IMS-22 func desde el controller para modificar un turno de disponibilidad medico desde el modelo */
    public function modifyDispByMedic($id_turno, $id_medico)
    {
        // Si ya se mandaron los campos
        if ((isset($_GET['horario_inicio']) || !empty($_GET['horario_inicio'])) && (isset($_GET['horario_fin']) || !empty($_GET['horario_fin']))) {
            $new_inicio = $_GET['horario_inicio'];
            $new_fin = $_GET['horario_fin'];
            $new_duracion = $_GET['duracion'];
            $this->model->alterTurno($id_turno, $new_inicio, $new_fin, $new_duracion);
            // vuelve atras
            $this->showDispByMedic($id_medico);
        } else {
            $turno = $this->model->getDispTurno($id_turno);
            $this->view->showUpdateDisp($turno);
        }
    }

    //showaddTurno
    public function showFormAddTurno()
    {
        //la secretaria con us id
        $id_usuario = $_SESSION['USER_ID'];
        //id medico a asignar en el sistema

        $medic = $this->model->getMedicsAssigned($id_usuario);



        $this->view->showFormAddTurno($medic);
    }


    //addTurno




    public function addTurno()
    {

        if (!empty($_POST['medico']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['obra_social']) && !empty($_POST['dia']) && !empty($_POST['hs'])) {

            $medic = $_POST['medico'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];

            $oSocial = $_POST['obra_social'];
            $dni = $_POST['dni'];

            $dia = $_POST['dia'];
            $hs = $_POST['hs'];

            $this->model->addTurno($medic, $nombre, $apellido, $dni, $oSocial, $dia, $hs);
        }
        header("Location: " . BASE_URL);
    }





    //show Turnos

    public function showTurns($dia = null){
        if ($dia == null) {


        $id_usuario = $_SESSION['USER_ID'];


            $turns = $this->model->getTurns($id_usuario);
            
            $this->view->showTurns($turns);
        }
        else {
            $id_usuario = $_SESSION['USER_ID'];

            $turns = $this->model->getTurns($id_usuario, $dia);
            
            $this->view->showTurns($turns);
        }

    }
    public function turnosMañanaTarde($momento,$dia)
    {
        $id_usuario = $_SESSION['USER_ID'];

        if ($momento == "mañana") {
            $turns = $this->model->getTurnsMañana($id_usuario, $dia);
        } else {
            $turns = $this->model->getTurnsTarde($id_usuario, $dia);
        }
        if($turns == null){
            $this->view->showError("No hay turnos para el dia seleccionado");
        }else{
        $this->view->showTurns($turns);}
        }
    }

    
    /*
          public function showCreateDisp($id) {
        $turns = $this->model->getDispByMedic($id);

        $this->view->showCreateDisp($id);
    }
     */
