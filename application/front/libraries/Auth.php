<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth
{

    private $ci;

    private $config = array();

    protected $roles = array();

    protected $user = array();


    public function __construct()
    {
        $this->ci =& get_instance();
        if(!$this->ci->config->load('auth'))
        {
            log_message('error', "Le fichier de configuration auth.php n'a pas été trouvé");
        }
        $this->config = $this->ci->config->item('auth');
    }

    public function check_user($email, $password)
    {

    }

    public function hash($password)
    {
        $this->ci->load->library('encrypt');

        $passwordCrypted = $this->ci->encrypt->encode($password);

        return $passwordCrypted;
    }


    public function register($data)
    {

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