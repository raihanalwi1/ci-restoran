<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
        $this->load->view('page/header');
		$this->load->view('contact');
        $this->load->view('page/footer');
		
	}
}
