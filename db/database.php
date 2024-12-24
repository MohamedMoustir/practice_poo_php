

<?php 
define('HOST','localhost');
define('USER','root');
define('PASSWORD','root');
define('DATABASE','systeme_medical');

class database{
public $host = HOST;
public $user = USER;
public $password = PASSWORD;
public $datbase = DATABASE;

public $link;
public $error;

function __construct(){
  $this->db_connect();
}

function db_connect(){

  $this->link = mysqli_connect($this->host ,$this->user , $this->password ,$this->datbase);
  if ($this->link) {
    $this->error = "Connection successful.";
   
 }
}


}