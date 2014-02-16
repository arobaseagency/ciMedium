<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth extends CX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function test()
    {
        $this->config->load('auth');
        $config = $this->config->item('auth');

        var_dump($config);
    }

    public function login()
    {

    }

    public function logout()
    {

    }

    public function forgotPassword()
    {

    }

    /**
     *   Route : auth/inscription
     **/
    public function subscription()
    {

        $this->layout->view('auth/inscription', parent::$items);
    }

}