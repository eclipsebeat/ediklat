<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of administrasi
 *
 * @author Gerhantara
 */
class administrasi {
    public $konek;

    function __construct(){
           $database = new Database();
            $this->konek = $konek->connect();
            return $this->konek;
    }
    
    function backup($param) {
        
    }
    
    function restore($param) {
        
    }
}

?>
