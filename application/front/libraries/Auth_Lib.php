<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth_Lib
{

    private $CI;

    private $config = array();
    public $test = "ici";

    protected $roles = array();

    protected $model = array(
        'users' => 'users_model',
        'roles' => 'roles_model'
    );


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

    public function verify_user($email, $password)
    {

    }


    public function hash($password)
    {
        $this->CI->load->library('encrypt');

        $passwordCrypted = $this->CI->encrypt->encode($password);

        return $passwordCrypted;
    }


    public function register($data)
    {

    }

    /**
     *  Génère la clé d'activation qui sera envoyé dans une url
     *  retourne une clé crypté
     *  @return string $key
     */
    public function generate_key_email($email)
    {

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


    private function set_user_session($data = array())
    {

    }

    public function login()
    {

    }

    public function has_role($id)
    {

    }

    public function user_logged()
    {

    }

    public function logout()
    {

    }


}