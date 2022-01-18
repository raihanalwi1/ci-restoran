<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_about','tentang');
	}
	public function index()
	{
		$data =  array(
			'result' => $this->tentang->data()
		);
        $this->load->view('page/header');
		$this->load->view('about', $data);
        $this->load->view('page/footer');
		
	}
}
