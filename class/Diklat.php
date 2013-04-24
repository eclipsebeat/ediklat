<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Diklat
 *
 * @author Gerhantara
 */
class Diklat {
    
    public $konek;

    function __construct(){
           $database = new Database();
            $this->konek = $konek->connect();
            return $this->konek;
    }
    
    function rekamDiklat($nama_diklat, $lokasi, $waktu, $tgl_mulai, $tgl_selesai) {
        
        $tgl_rekam = date('Y-m-d');
        $query = $this->konek->prepare("insert into diklat(nama_diklat, lokasi, waktu, tgl_mulai, tgl_selesai, tgl_rekam)
            values(?,?,?,?,?,?)");
        $data = array($nama_diklat, $lokasi, $waktu, $tgl_mulai, $tgl_selesai, $tgl_rekam);
        $query->execute($data);
        $jml_row = $query->rowCount();
        return $jml_row;
        
    }
    
    function getDiklat($id_diklat, $nama_diklat, $lokasi, $waktu, $tgl_mulai, $tgl_selesai) {
        
    }
    
    function editDikklat($param) {
        
    }
    
    function hapusDiklat($param) {
        
    }
    
    function daftarDiklat($param) {
        
    }
    
    function verif_peserta($param) {
        
    }
    
    function hasilDiklat($param) {
        
    }
}

?>
