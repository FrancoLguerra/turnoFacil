<?php
//los modelos lo usamos para consultas al servidor


class TurnoFacilModel{
    //private $db;
    /* private $dbUrl = $cleardb_db;
    private $dbSv = $cleardb_server;
    private $dbUsr= $cleardb_username;
    private $dbPss = $cleardb_password;
    */
    
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_metodologia_tpe;charset=utf8','root','');
        // atributos de pdo para el debug de errorers
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }





    function getMedicsAssigned($id){

        $query = $this->db->prepare('SELECT * from secretaria  JOIN medico ON medico.id_secretaria  = secretaria.id_secretaria  WHERE secretaria.id_secretaria = ?');

        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    
    function getDispByMedic($id){

        $query = $this->db->prepare('SELECT *  from  disp_medico JOIN medico ON medico.id_medico=disp_medico.id_medico WHERE medico.id_medico =?');

        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function borrarDisp($id_turno){
        $query = $this->db->prepare('DELETE FROM disp_medico WHERE id_disp=?');
        $query->execute([$id_turno]);
    }

    /*/ IMS-22 funcion para modificar disponibilidad desde la base de datos */
    public function alterTurno($id_turno, $inicio, $fin, $duracion) {
        try {
            $query = $this->db->prepare('UPDATE disp_medico SET horario_inicio=?, horario_fin=?, duracion=? WHERE id_disp=?');
            $query->execute([$inicio, $fin, $duracion, $id_turno]);
        }
        catch (PDOException $error) {
            // devuelve el error y lo imprime
            $message = $error->getMessage();
            $code = $error->getCode();
            return $message . '/' . $code;
        }
    }

    /* IMS-22 funcion para retornar un turno dado su id */
    public function getDispTurno($id) {
        try {
            $query = $this->db->prepare('SELECT * FROM disp_medico WHERE id_disp=?');
            $query->execute([$id]);
            
            $turno = $query->fetch(PDO::FETCH_OBJ);

            return $turno;

        }
        catch (PDOException $error) {
    
            $error->getMessage();
    
            echo $error;
        }    
    }

    function altaDisp($id_medico, $horario_inicio, $horario_fin, $dia,$duracion) {
        $query = $this->db->prepare('INSERT INTO disp_medico (id_medico, horario_inicio, horario_fin, dia, duracion) VALUES (?,?,?,?,?)');
        $query->execute([$id_medico, $horario_inicio, $horario_fin, $dia, $duracion]);
    }



    function addTurno($medic, $nombre, $apellido,$dni, $oSocial,$dia , $hs) {
        $query = $this->db->prepare('INSERT INTO turno_paciente (medico_asignado, nombre_paciente, apellido_paciente, dni_paciente, obra_social ,dia, hs) VALUES (?,?,?,?,?,?,?)');
        $query->execute([$medic, $nombre, $apellido,$dni, $oSocial,$dia , $hs]);
    }


    function getTurns($id, $dia = null) {
        if ($dia == null) {
            $query = $this->db->prepare('SELECT * FROM turno_paciente WHERE medico_asignado=?');
            $query->execute([$id]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        else {
            $query = $this->db->prepare('SELECT * FROM turno_paciente WHERE medico_asignado=? AND dia=?');
            $query->execute([$id, $dia]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    }


}