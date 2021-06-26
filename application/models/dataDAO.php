<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataDAO extends CI_Model {



	public function getUsuarios($status)
	{

		$sql = "SELECT * FROM usuario where status = ?";
	
		$query = $this->db->query($sql, array($status));

		
		return ($query->num_rows() > 0) ? $query->result() : false;

	}

	public function insertUsuario($dados)
	{
		$this->db->trans_start();

		$this->db->db_debug = false;

	
		
		$sql = "INSERT INTO usuario (nome, email, data, senha, status) VALUES (?, ?, ?, ?, ?)";

		$this->db->query($sql, array($dados['nome'], $dados['email'], $dados['data'],$dados['senha'], 
			isset($dados['_status']) ? '1' : '0' ));




		$this->db->trans_complete();
			
		$this->db->db_debug = true;

		return ($this->db->trans_status() === TRUE);
	
	}

	public function getUsuario($id){

		$sql = "SELECT * FROM usuario where id = ?";
	
		$query = $this->db->query($sql, array($id));

		
		return ($query->num_rows() > 0) ? $query->row() : false;



	}

	public function updateUsuario($dados)
	{

		$this->db->trans_start();

		$this->db->db_debug = false;


		$sql = "UPDATE usuario SET nome=?, email=?, data=?, senha=?, status=? WHERE id=?";

		$this->db->query($sql, array($dados['nome'], $dados['email'], $dados['data'],$dados['senha'], 
			isset($dados['_status']) ? '1' : '0', $dados['id']));

		$this->db->trans_complete();
			
		$this->db->db_debug = true;

		return ($this->db->trans_status() === TRUE);
	}

}