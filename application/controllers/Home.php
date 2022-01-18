<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_about','tentang');
		
	}
	public function index()
	{
		$data = array(
			'about' => $this->tentang->data()
		);
		$this->load->view('page/header');
		$this->load->view('home', $data);
		$this->load->view('contact');
		$this->load->view('page/footer');
		

	}
	
}
