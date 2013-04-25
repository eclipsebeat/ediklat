<?php
class database {
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $db1="ediklat";
    public $db2="kepegawaian";
    public $db2_port="";
    
    protected $koneksi;
    protected $koneksi2;


    function connect(){
        try{
            $this->koneksi=new PDO("mysql:host=$this->host;dbname=$this->db1;$this->user;$this->pass");
            
            return $this->koneksi;
        }
        catch(PDOException $e){
            return $e->getMessage90;
        }
    }
    
    function connect1(){
        try{
            $this->koneksi2=new PDO("mysql:host=$this->host;port=$this->db2_port;dbname=$this->db2;$this->user;$this->pass");
            
            return $this->koneksi;
        }
        catch(PDOException $e){
            return $e->getMessage90;
        }
    }

}

?>