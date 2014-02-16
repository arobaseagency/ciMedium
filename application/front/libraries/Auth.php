<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth
{

    private $ci;

    private $roles = array();
    private $config = array();


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