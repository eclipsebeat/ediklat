<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Gerhantara
 */
include_once('koneksi.php');


class user{
    public $konek;

    function __construct(){
           $database = new Database();
            $this->konek = $konek->connect();
            return $this->konek;
    }
    
    function login($username,$pass){
        $hash_pass = crypt($pass);
        $query=$this->konek->query("select * from user where username='$username' and pass='$hash_pass' and stat =0");
        $hasil=$query->rowcount();
        return $hasil;
    }
    
    function createUser($username, $pass) {
        $query=$this->konek->prepare("INSERT INTO user(username,pass,date_created) VALUES(?,?,?)");
        $date_created=date("Y-m-d");
        $hash_pass=crypt($pass);
        $isi=array($username,$hash_pass,$date_created);
        $query->execute($isi);
        $jml_data=$query->rowCount();
        return$jml_data;
        
    }
    
    function edituser($id, $pass){
        $date_updated = date("Y-m-d");
        $hash_pass = crypt($pass);
        $query = $this->konek->query("update user set pass = '$hash_pass', date_updated=$date_updated where id = $id");
        $jml_data = $query->rowCount();
        return $jml_data;
    }
    
    function hapusUser($iduser) {
        $query=$this->konek->prepare("delete from user where iduser='$iduser");
        $jml_data = $query->rowCount();
        return $jml_data;
    }    

    function resetPass($param) {
        
    }
       
    
}

?>
