<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {
    public $table = "menu";

    public function data(){
        $query = "SELECT * FROM $this->table ORDER BY nama_menu ASC";
        return $this->db->query($query)->result();
  
    }
}