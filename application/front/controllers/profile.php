<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class Profile extends CX_Controller
{


    public function __construct()
    {
		parent::__construct();
		
		$this->authcx->access_logged();
		$this->authcx->in_groups( array('voyant', 'consultant') );
		
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
		$vars = array();
		
		$vars['user'] = $this->session->userdata('user_data');
		$vars['userInfo'] = $this->db->get_where('info_users', array('id' => auth_data('id')))->row();
		
		
		$this->layout->view('profile/information', $vars);
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