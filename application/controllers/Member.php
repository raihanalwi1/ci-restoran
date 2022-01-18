<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_member');
	}
	public function index()
	{
		$data = array(
			'mbr' => $this->M_member->data()
		);
        $this->load->view('page/header');
		$this->load->view('member', $data);
        $this->load->view('page/footer');
		
	}
}
