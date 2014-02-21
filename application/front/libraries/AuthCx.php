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
		
        if(!$this->CI->config->load('auth'))
        {
            log_message('error', "Le fichier de configuration auth.php n'a pas été trouvé");
        }
        $this->config = $this->CI->config->item('auth');

        log_message('debug', "Auth Library initialized");
    }
	
	
	
	public function __call($method, $arguments)
	{
		if(!method_exists($this->{__CLASS__}, $method))
		{
			throw new Exception("Méthode appelé de la class " . __CLASS__ . "::". $method ."() non définit");
		}
		
		return call_user_func_array(array($this->auth_model, $method), $arguments);
	
	}
	
	
	public function __get($var)
	{
		return get_instance()->$var;
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
	 *  @return boolean
	 */
	public function regsiter($data)
	{
		// appel du model et traitemetn des valeurs
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


}