<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('quemSomos');
		$this->load->view('footer');
	}

	public function equipe()
	{
		$this->load->view('header');
		$this->load->view('equipe');
		$this->load->view('footer');
	}
}
