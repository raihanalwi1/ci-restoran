<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_menu','menu');
	}
	public function index()
	{
		$data = array(
			'title' => 'MENU MAKANAN KITA NICH',
			'result' => $this->menu->data()
		);
        $this->load->view('page/header');
		$this->load->view('menu', $data);
        $this->load->view('page/footer');
		
	}
}
