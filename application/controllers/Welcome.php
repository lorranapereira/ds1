<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('Class_model','model');

	}
	public function index()
	{
		if (isset($_GET['cod'])) {
			$_SESSION['cod'] = $_GET['cod'];			
		}
		$this->load->view('welcome_message');
	}
	public function inserir(){
		$obj = array(
			'descricao' => $_POST['descricao'],
			'foto'  => $_POST['foto'],
			'bairro'  => $_POST['bairro'],			
			'preco'  => $_POST['preco'],
			'dormitorios'  =>$_POST['dormitorios'],
			'tipo_operacao'  => $_POST['tipo_operacao']
			
		);		
		if (isset($_SESSION['cod'])){
			$this->model->update($obj);	
		}
		else{
			$this->model->salvar($obj);	
		}		    		
		redirect('http://localhost/index.php/Welcome/listar');
		
	}
	public function consultar(){	
		$this->load->view('consultar');
		
	}		
	public function salvarConsulta(){
		$obj = array(
			'bairro' => $_POST['bairro'],
			'dormitorios'  =>$_POST['dormitorios'],
			'tipo_operacao'  => $_POST['tipo_operacao']
			
		);		
		$data['imoveis'] = $this->model->select($obj);
		$this->load->view('listar',$data);	
		
		
	}	
	public function listar(){
		$data['imoveis'] = $this->model->getall()->result();		
		$this->load->view('listar',$data);	
	}
	public function deletar(){
		$cod = $_GET['cod'];
		$this->model->excluir($cod);
		redirect('http://localhost/index.php/Welcome/listar');
	}
}
