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
	
	
	public function validate_datebirth($input)
	{
		if(isset($input))
		{
			if(!preg_match("/([0-9]{4})-([0-9]{2})-([0-9]){2}/", $input))
			{
				$this->form_validation->set_message('validate_datebirth', "La %s doit être au format yyyy-mm-dd");
				return false;
			} else {
				return true;
			}
		}
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
		$vars['userInfo'] = $this->db->get_where('info_users', array('users_id' => $vars['user']['id']))->row_array();

		if($this->input->post())
		{
			$this->load->library('form_validation');
			
			if($this->form_validation->run('profile/information'))
			{

				$datadb = array();
				$this->load->model('infoUsers_model');
				
				$datadb['email'] = $this->input->post('email');
				$datadb['ville'] = ($this->input->post('ville') == '') ? null : $this->input->post('ville');
				
				if($this->input->post('sex') == 'femme' or $this->input->post('sex') == 'homme'){
					$datadb['sex'] = $this->input->post('sex');
				}
				
				$datadb['date_naissance'] = ($this->input->post('date_naissance') == '') ? null : $this->input->post('date_naissance');
				
				$iduser = $this->authcx->get_user_data('id');
				$this->infoUsers_model->update_insert($iduser, $datadb);
				
				$this->session->set_flashdata('msg', "info~ Vos informations ont été modifié avec Succès");
				redirect(current_url());
				
			}
			
		}
		
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