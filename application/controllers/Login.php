<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('user_login');
		$this->load->view('footer');
	}

	public function validar_cadastro()
	{
		$this->load->view('header');
		$this->load->view('homepage_login');
		$this->load->view('footer');
	}

	public function cadastrar_usuario()
	{
		$this->load->view('header');
		$this->load->view('cadastrar_usuario');
		$this->load->view('footer');
	}
}



