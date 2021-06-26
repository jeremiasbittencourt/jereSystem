<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Mpdf\Mpdf;

class Dados extends CI_Controller {

     public function pdfDados(){

		$this->load->view('header');
		$dados['usuario'] = $this->dataDAO->getUsuarios('1'); 
		$this->load->view('pdf_dados', $dados);
		$this->load->view('footer');

		$mpdf = new \Mpdf\Mpdf();
		$html=$this->load->view('pdf_dados',[], true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();


		
}
}


