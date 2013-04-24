<?php
class database {
    const $host="localhost";
    const $user="root";
    const $pass="";
    const $db1="ediklat";
    const $db2="kepegawaian";
    const $db2_port="";
    
    protected $_connection_kepeg;
    protected $_connection_ediklat;
    protected $mysqli_exception;
    protected $host;
    protected $user;
    protected $pass;
    protected $db_name;

    protected $config_kepeg;
    protected $config_ediklat;
    
    private static $_instance;
    protected static $log;
    
    protected function __construct(){
        
    }
    
     public static function getInstance() {
        if(!self::$_instance) {
			self::$_instance = new self();
	}
	return self::$_instance;
    }
    
    protected function config_kepeg(){
        if(isset($this->_connection_kepeg)){
        error_log('');     
        }
        
        $this->config_kepeg = array(
            'host' => self::host,
            'user' => self::user,
            'password' => self::pass,
            'db_name' => self::db2
        );
    }

//    function connect(){
//        try{
//            $this->koneksi=new PDO("mysql:host=$this->host1;dbname=$this->db1;$this->user1;$this->pass1");
//            
//            return $this->koneksi;
//        }
//        catch(PDOException $e){
//            return $e->getMessage90;
//        }
//    }
//
}

?>