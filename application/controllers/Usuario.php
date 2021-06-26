<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function efetuarCadastro()
	{

		$dados = $this->input->post();

		$retorno = $this->dataDAO->insertUsuario($dados);

		$this->session->set_flashdata('MSGOPERACAO', $retorno ? 'Cadastrado com sucesso!' : 'Erro ao efetuar o cadastro.');
		redirect('mensagem_cadastro', 'refresh');	


		//$this->load->view('header');
		//$this->load->view(' ');
		//$this->load->view('footer');

		//require_once __DIR__ . '/vendor/autoload.php';



	}

	public function mensagem(){

		$this->load->view('header');
		$this->load->view('cadastro_efetuado');
		$this->load->view('footer');
	}

	public function usuariosCadastrados(){

		$this->load->view('header');

		$dados['usuarios'] = $this->dataDAO->getUsuarios('1'); 

		$this->load->view('usuarios_cadastrados', $dados);
		
		$this->load->view('footer');
		

	}	

	public function getUsuarios(){

		$status = $this->input->post('status');

		$return = $this->dataDAO->getUsuarios($status);

		echo json_encode($return);

	}

	public function alterarUsuario($id){

		$this->load->view('header');

		$dados['usuario'] = $this->dataDAO->getUsuario($id); 

		$this->load->view('alterar_usuario', $dados);
		
		$this->load->view('footer');

	}

	public function atualizarUsuario(){

		$dados = $this->input->post();

		$retorno = $this->dataDAO->updateUsuario($dados);

		$this->session->set_flashdata('MSGOPERACAO', $retorno ? 'Atualizado com sucesso!' : 'Erro ao efetuar a atualizacao.');
		redirect('mensagem_atualizacao', 'refresh');	

	}


	public function mensagemAtualizacao(){

		$this->load->view('header');
		$this->load->view('mensagem_atualizacao');
		$this->load->view('footer');
	}


}


