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
        $this->load->library('form_validation');
        if($this->input->is_ajax_request())
        {
            if($this->form_validation->run('register'))
            {
                echo "formulaire réussi !";
                $this->load->view('auth/inscription');
            } else {
                var_dump($this->input->post());
                $this->load->view('auth/inscription');
            }
        }

        //$this->load->view('auth/inscription');
    }

}