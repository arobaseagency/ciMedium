<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth extends CX_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->layout->initLayout('two-column');
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
    public function registration()
    {
        $tpl = array();

        $this->load->library('form_validation');
        if($this->input->post())
        {
            if($this->form_validation->run('register'))
            {
                $post = $this->input->post();
                $this->load->model('users_model');
                $this->load->model('metasUsers_model');
                $this->load->model('roles_model');

                $role = $this->roles_model->get_role_by_code($post['code']);
                $this->load->library('encrypt');

                $dataUser = array(
                    'username'  => $post['username'],
                    'email'     => $post['email'],
                    'password'  => $this->encrypt->encode($post['password']),
                    'ip'        => $_SERVER['REMOTE_ADDR'],
                    'create_at' => date('Y-m-d H:i:s'),
                    'roles_id'  => $role->id,
                );
                $this->users_model->add_user($dataUser);

                $idUser = $this->users_model->insert_id();

                $this->metasUsers_model->add_metas($idUser, array('sex' => $post['sex']));

                // Si l'enregistrement a réussi on redirige vers la page d'accueil
                //redirect('', 'location');

            }
        }

        $this->layout->view('auth/inscription', $tpl);
    }


    /*
     *  methode qui prend en variable un nom définit
     *  qui permet de renvoyer vers la page de confirmation.php
     *  et d'afficher le bon contenu
     */
    public function confirmation($typeconfirme = null)
    {
        $tpl = array();
        switch($typeconfirme)
        {
            case "inscription":
                $tpl = "inscription validé";
                break;
            case "activation-compte":
                $tpl = "activation-compte";
                break;
            default:
                show_404('/404');

        }
        $this->layout->view('auth/confirmation.php', $tpl);
    }

}