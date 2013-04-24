<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pegawai
 *
 * @author Gerhantara
 */
class pegawai {
     public $konek;

    function __construct(){
           $database = new Database();
            $this->konek = $konek->connect();
            return $this->konek;
    }
    
    function getPegawai($param) {
        
    }
    
    function getHistory($param) {
        
    }
}

?>
