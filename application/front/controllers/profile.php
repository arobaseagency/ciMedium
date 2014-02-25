<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class Profile extends CX_Controller
{


    public function __construct()
    {
		parent::__construct();
		
		$this->layout->initLayout('profile');
    }
    
    
    public function index()
    {
     	
		$this->compte();
    }
	
	
	public function compte()
	{
		$this->layout->view('profile/compte');
	}
	
	
	public function informations()
	{
		$this->layout->view('profile/information');
	}
	
	
	public function messages()
	{
		$this->layout->view('profile/message');
	}
	
	
	public function historique()
	{
		$this->layout->view('profile/historique');
	}
	
}