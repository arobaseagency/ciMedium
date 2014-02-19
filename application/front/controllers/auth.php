<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth extends CX_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->layout->initLayout('two-column');
        $this->config->load('auth');
        $this->load->library('auth_lib');
    }

    public function index()
    {

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
                $modelQueryUser = $this->users_model->add_user($dataUser);

                $idUser = $this->users_model->insert_id();

                $modelQueryMetas = $this->metasUsers_model->add_metas($idUser,
                                                                      array('sex' => $post['sex']));

                if( ($modelQueryUser != false) and ($modelQueryMetas != false) )
                {
                    // on envoi l'email d'activation
                    Console::log('Query User:'.$modelQueryUser);
                    Console::log('Query Meta:'.$modelQueryMetas);
                    Console::log('email envoyé');
                }

                // Si l'enregistrement a réussi on redirige vers la page d'accueil
                //redirect('', 'location');

            }
        }

        $this->layout->view('auth/inscription', $tpl);
    }


    public function activation($key)
    {
        if(isset($key))
        {



        } else {
            show_404();
        }
    }


    /*
     *  methode qui prend en variable un nom définit
     *  qui permet de renvoyer vers la page de confirmation.php
     *  et d'afficher le bon contenu
     */
    public function confirmation($type_content = null)
    {
        $tpl = array();

        $confcode = $this->config->item('auth');
        // on stock le tableau codepage du fichier config de auth
        $confcode = $confcode['codepage'];

        switch($type_content)
        {
            case "inscription":
                // On stock le nom du type de contenu que l'on souhaite
                $tpl['codepage'] = $confcode['inscription']['code'];
                $this->layout->setTitle($confcode['inscription']['title']);
                break;

            case "activation-compte":
                $tpl['codepage'] = $confcode['activation']['code'];
                $this->layout->setTitle($confcode['activation']['title']);
                break;

            default:
                show_404();

        }

        $this->layout->view('auth/confirmation.php', $tpl);
    }

}