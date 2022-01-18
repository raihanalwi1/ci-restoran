<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {
    public $table = "member";

    public function data(){
        $query = "SELECT * FROM $this->table ORDER BY nama ASC";
        return $this->db->query($query)->result();
  
    }
}