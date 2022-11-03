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
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe_metodologia_2022;charset=utf8','root','');
    }





    function getMedicsAssigned($id){

        $query = $this->db->prepare('SELECT *  from  secretaria JOIN medico on medico.id_secretaria  = secretaria.id_secretaria  WHERE secretaria.id_secretaria =?');

        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_OBJ);


    }
    
    function getDispByMedic($id){

        $query = $this->db->prepare('SELECT *  from  disp_medico JOIN medico ON medico.id_medico=disp_medico.id_medico WHERE medico.id_medico =?');

        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_OBJ);


    }

}