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

        $this->CI->load->model($this->model['users'], 'userModel');
        $this->CI->load->model($this->model['roles'], 'rolesModel');
    }

    public function verify_user($email, $password)
    {

    }


    public function hashage($password)
    {
        $this->CI->load->library('encrypt');

        $passwordCrypted = $this->CI->encrypt->encode($password);

        return $passwordCrypted;
    }


    public function register($data)
    {

    }


	/**
	 * @param (string) $email l'email du destinataire
	 * @param (string) $haskey l'email qui aura été crypté
	 * @param (array) $vars si vous souhaitez passer des données pour le template de mail
	 *
	 * @return (string) print debug pour email
	 */
	public function send_email_activation($email, $pseudo)
	{
		$this->CI->load->library('email');
		$this->CI->config->load('email');

		$tpl = array();
        $uniqueId = $this->hashage($email);
		$tpl['activation_link'] = base_url("auth/activation/" . $uniqueId);
        $tpl['username'] = $pseudo;

		$content = $this->CI->load->view('email/activation', $tpl, true);

		$this->CI->email->from($this->CI->config->item('site_email'), $this->CI->config->item('site_name'))
						->to($email)
						->subject("Activation de votre Compte")
						->message($content);

		$this->CI->email->send();

		return $this->CI->email->print_debugger();

	}


    public function verify_activation($key)
    {
        $this->CI->load->library('encrypt');
        $key_decrypted = $this->CI->encrypte->decode($key);

        $query = $this->CI->db->get_where('users', array('email' => $key_decrypted));

        $row = $query->row_array();
        if(count($query->row()) == 1 and $row['actived'] === false)
        {
            $this->db->where('id', $row['id'])->update('users', array('activated' => 1));
            return true;
        } else {
            return false;
        }

    }


    private function set_user_session($data = array())
    {

    }

    public function login()
    {

    }

    public function logout()
    {

    }

    public function has_role($id)
    {

    }

    public function user_logged()
    {

    }


}