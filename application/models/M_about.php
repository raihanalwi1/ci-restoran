<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {
    public $table = "tentang";

    public function data(){
        $query = "SELECT * FROM $this->table ORDER BY judul ASC";
        return $this->db->query($query)->result();
  
    }
}