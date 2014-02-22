<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth extends CX_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->layout->initLayout('two-column');
        $this->load->library('AuthCx');
		
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
		
        $this->load->library('form_validation');
        if($this->input->post())
        {
            if($this->form_validation->run('register'))
            {
                $post = $this->input->post();

                $this->load->library('encrypt');

                $dataUser = array(
                    'username'  => $post['username'],
                    'email'     => $post['email'],
                    'password'  => $this->encrypt->encode($post['password']),
                    'ip'        => $_SERVER['REMOTE_ADDR'],
                    'create_at' => date('Y-m-d H:i:s'),
                    'activation_code' => sha1(time()),
                );
				
				$this->authcx->register($dataUser, $post['code']);
				
                $statutQuery = false;
				if($statutQuery)
				{
					// Si l'enregistrement a réussi on redirige vers la page d'accueil
                	//redirect('', 'location');
                	Console::log(sha1($post['email']));
					$hashKeyActivation = sha1($post['email']);
					
					$this->auth_lib->send_email_activation($post['email'], $hashKeyActivation);
				}

            }
        }


        $this->layout->view('auth/inscription');
    }


    public function activation($key)
    {
        if($key)
        {
			$rowUser = $this->db->get_where('users', array('activation_code' => $key))->row();
			
			if(count($rowUser) == 1 and $rowUser->actived == false)
			{
				$data = array("actived" => 1);
				$this->db->update('users', $data, "id = ".$rowUser->id);
				
				// rajouter method AuthCX afin de se connecter et d'envoyer en session les variables
				
				redirect('/auth/confirmation/activation-compte');
			} else {
				redirect('/auth/confirmation/deja-actif');
			}
			
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
                $tpl['codepage'] = "inscription";
                $this->layout->setTitle("Inscription | Enregistrement");
                break;

            case "activation-compte":
                $tpl['codepage'] = "activate";
                $this->layout->setTitle("Activation de votre Compte");
                break;
			
			case "deja-actif":
                $tpl['codepage'] = "yet_activate";
                $this->layout->setTitle("Compte déjà activé");
                break;

            default:
                show_404();

        }

        $this->layout->view('auth/confirmation.php', $tpl);
    }

}