<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {
    public $table = "member";

    public function data(){
        $query = "SELECT * FROM $this->table ORDER BY Nama_member ASC";
        return $this->db->query($query)->result();
  
    }
}