<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_member','member');
	}
	public function index()
	{
		$data = array(
			'title' => 'INI KELOMPOK',
			'result' => $this->member->data()

		);
        $this->load->view('page/header');
		$this->load->view('member', $data);
        $this->load->view('page/footer');
		
	}
}
