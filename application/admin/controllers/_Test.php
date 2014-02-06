<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(true);
	}
	
	public function index()
	{
		$this->load->library('form_validation');
		$db = $this->load->database('test');
		
		$this->form_validation->set_rules('espece', 'Espèce', 'trim|required|min_length[3]|max_length[40]|alpha_dash|encode_php_tags|xss_clean');
		$this->form_validation->set_rules('sexe', 'Sexe', 'trim|max_length[1]|encode_php_tags|xss_clean');
		$this->form_validation->set_rules('date_naissance', 'Date Naissance', 'trim|required|alpha_numeric|encode_php_tags|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->dwootemplate->display('test.tpl');
		}
		else
		{
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			
			$this->dwootemplate->display('test.tpl');
		}
		
	}
	
	
	public function datacrud()
	{
		
		//$this->load->library('Datacrud', array('bdd'=>'test', 'table'=>'animal'));
		$this->load->library('Datacrud');
		$crud = new Datacrud();
		$crud->initDatacrud('test', 'animal');
		//$crud->libelle = array("tony", "jack", "barry", "naissance", "Nom", "Coment");
		$crudForm = $crud->generateForm();

		$this->dwootemplate->assign('crudForm', $crudForm);
		$this->dwootemplate->display('test.tpl');
	}
	
	
	public function captcha()
	{
		$this->load->helper('captcha');
	}
	
	public function batch()
	{
		echo "command en cli";
	}
	
	
	
	
}