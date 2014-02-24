<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class AuthCx
{

	/**
	 * Status du compte (actived ou no actived boolean)
	 * 
	 * @var boolean
	 */
    protected $status;
	
	/**
	 * Objet CodeIgniter
	 */
	protected $CI;


    public function __construct()
    {
        $this->CI =& get_instance();
		$this->CI->load->library('session');
		
        log_message('debug', "Auth Library initialized");
    }
	
	

	/**
	 *  Oublie de mot de passe
	 * 
	 * 	@return mixed boolean / array
	 */
    public function forgot_password($id)
	{
		if($this->users_model->forgot_password($id))
		{
			
		}
	}
	
	
	
	/**
	 *  Enregistrement des informations utilisateur en sessions
	 *  
	 */
	public function login($inputPost)
	{
		$this->CI->load->model('users_model');
		$row = $this->CI->db->get_where('users', array('email' => $inputPost['email']) )->row_array();
		
		// mise à jour du status online dans la table users
		$this->CI->users_model->update_status(1, $row['id']);
		
		// on récupère toutes les données utilisateurs et le groups auquel il appartient
		$data = $this->CI->users_model->get_user_to_group($row['id'])->row_array();
		
		$userSession = array(
			'user_data' => array(
				'id' => $data['users_id'],
				'username' => $data['username'],
				'email' => $data['email'],
				'group_id' => $data['groups_id'],
				'group_name' => $data['name'],
				'group_code' => $data['code'],
				'level' => $data['level'],
				'online' => 1
			)
		);
		
		/*
		if($inputPost['remember_me'])
		{
			$userSession['user_data']['remember_me'] = $inputPost['remember_me'];
		}
		*/
		
		$this->CI->session->set_userdata($userSession);
		
	}
	
	
	
			
	/**
	 *  @return void
	 */
	public function logout()
	{
		// traitement pour la déconnexion
	}
	
	
	
	/**
	 *	retourne le tableau des paramètres utilisateur stocké en sessions
	 *	
	 *	@return array 
	 */
	public function get_user_data()
	{
		if( $this->session->userdata('user_data') )
		{
			return $this->session->userdata('user_data');
		}
	}
	
	
	
	/**
	 * @param (string) $email l'email du destinataire
	 * @param (string) $activateCode le code d'activation qui aura été crypté
	 * 
	 * @return (string) print debug pour email
	 */
	public function send_email_activation($email, $activateCode)
	{
		$data = array();
		$this->CI->load->library('email');
		$this->CI->config->load('email');
		
		// on récupère le tableau email du fichier config
		$confEmail = $this->CI->config->item('email');
		
		// On stocke le lien d'activation dans la variable activation_link dédié à la vue
		$data['activation_link'] = base_url("auth/activation/" . $activateCode);
		$content = $this->CI->load->view('email/activation', $data, true);
		
		$this->CI->email->from($confEmail['website'], $this->CI->config->item('site_name'));
		$this->CI->email->to($email);
		$this->CI->email->subject("Activation de votre Compte :: " . $this->CI->config->item('site_name'));
		$this->CI->email->message($content);
						
		$this->CI->email->send();
		// on affiche le debugger si l'email n'a pas été envoyé (valable qu'en mode développement)
		$this->CI->email->print_debugger();
	}
	
	
	/**
	 *  @return boolean
	 */
	public function register($data, $codeGroup)
	{
		$this->CI->load->model('users_model');
		$this->CI->load->model('groups_model');
		$this->CI->load->model('infoUsers_model');
		
		// insertion du code d'activation que l'on enverra par email
		//$data['activation_code'] = sha1(time());
		
		// on insére les données utilisateurs dans la table users
		$queryInsertUser = $this->CI->users_model->add_user($data);
		$LastUserId = $this->CI->users_model->insert_id();
		
		// on récupère les données du groups correspondantes au code que nous recevons
		if($codeGroup)
		{
			$groupRow = $this->CI->groups_model->get_group_by_code($codeGroup)->row();
		
			$insertUsersToGroups = $this->CI->db->insert_string('users_groups', array('users_id' => $LastUserId, 
													   'groups_id' => intval($groupRow->id) ));
			$this->CI->db->query($insertUsersToGroups);
		}

		if($queryInsertUser === true)
		{
			$this->send_email_activation($data['email'], $data['activation_code']);
		}													   
	}
	
	
	
	/**
	 *  @param $id 
	 *  @return boolean
	 */
	public function is_admin($id = false)
	{
		// call model user and groups
		
		
	}
	
	
	public function in_groups($check_group, $id = false, $check_all = false)
	{
		
	}


    public function hash($password)
    {
        $this->CI->load->library('encrypt');

        $passwordCrypted = $this->CI->encrypt->encode($password);

        return $passwordCrypted;
    }



}