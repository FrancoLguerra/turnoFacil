<?php
/*$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
*/
class UserModel {
   
  /*  private $db;
    private $dbUrl = $cleardb_db;
    private $dbSv = $cleardb_server;
    private $dbUsr= $cleardb_username;
    private $dbPss = $cleardb_password;

*/
// Connect to DB



public function __construct()
{
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_metodologia_tpe;charset=utf8','root','');
}


    function getUser($nombre) {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE nombre_usuario = ?');
        $query->execute([$nombre]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

 
    function regUser($nombre, $password, $rol){
        $query = $this->db->prepare('INSERT INTO usuario(nombre_usuario, password, rol_usuario) VALUES (?, ?, ?)');
        $query->execute([$nombre,$password, $rol]);

        
    }
}