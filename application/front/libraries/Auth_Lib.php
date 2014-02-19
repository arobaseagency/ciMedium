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

    public function check_user($email, $password)
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
    public function generate_key_email($iduser)
    {
        $this->CI->load->model($this->model['users']);
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