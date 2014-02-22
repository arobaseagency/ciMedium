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
	 * @param $string 
	 * @return (string) hash
	 */
	public function hash_string($string)
	{
		
	}
	
	
	
	public function verify($input, $existingHash)
	{
		$hash = crypt($input, $existingHash);
		
		return $hash === $existingHash;
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
	public function register($data, $codeGroup = null)
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
	 *  @return void
	 */
	public function logout()
	{
		// traitement pour la déconnexion
	}
	
	
	public function login($data)
	{
		// appel du model et traitement des données
	}
	
	
	public function get_user_id()
	{
		
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


	
	
	/**
	 * @param (string) $email l'email du destinataire
	 * @param (string) $haskey l'email qui aura été crypté
	 * @param (array) $vars si vous souhaitez passer des données pour le template de mail
	 * 
	 * @return (string) print debug pour email
	 */
	/*
	public function send_email_activation($email, $haskey, $vars = null)
	{
		$this->CI->load->library('email');
		$this->CI->config->load('email');
		
		$data = array();
		$data['activation_link'] = base_url("auth/activation/" . $haskey);
		
		$content = $this->CI->load->view('email/activation', $data, true);
		
		$this->CI->email->from($this->CI->config->item('site_email'), $this->CI->config->item('site_name'))
						->to($email)
						->subject("Activation de votre Compte")
						->message($content);
						
		$this->CI->email->send();
		
		return $this->CI->email->print_debugger();
		
	}
	*/

}