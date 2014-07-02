<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->layout->initLayout('two-column');

		$this->load->model('users_model');
		$this->load->model('groups_model');

    }


    public function login()
    {
    	// pour éviter le bug lorsque l'on renvoit du json
    	$this->output->enable_profiler(false);

		$this->load->library('form_validation');
		$jsonData = array();

		if($this->input->is_ajax_request())
		{

			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
			$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|xss_clean|callback_check_login');

			if($this->form_validation->run())
			{
				// on met en session les données utilisateurs
				$this->authcx->login($this->input->post());

				$jsonData['status'] = 1;
				$jsonData['redirect'] = $_SERVER['HTTP_REFERER'];

				$this->output->set_content_type('application/json')
							->set_output(json_encode($jsonData));
			}
			else
			{
				$jsonData['status'] = 0;
				$jsonData['msgErrors'] = validation_errors();

				$this->output->set_content_type('application/json')
							->set_output(json_encode($jsonData));
			}

		}
    }

	/**
	 *  Callback Valid form pour form_validation login()
	 */
	public function check_login($password)
	{
		$postEmail = $this->input->post('email');

		$query = $this->db->get_where('users', array('email' => $postEmail))->row_array();

		if($query['password'] == sha1($password) && $query['email'] == $postEmail)
		{
			return true;
		} else {
			$this->form_validation->set_message("check_login", "Le Mot de passe ou l'email n'existe pas");
			return false;
		}
	}



    public function logout()
    {
		$this->load->model('users_model');
		$user_data = $this->authcx->get_user_data();

		//$this->users_model->update_status(0, $user_data['id']);
		$this->db->update('users', array('online' => 1, 'update_at' => datetime_now()), 'id = ' . $user_data['id']);

		$this->session->unset_userdata('user_data');
		$this->session->set_flashdata('msg', 'error~ Vous avez bien été déconnecté');

		redirect(base_url());
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

                $dataUser = array(
                    'username'  => $post['username'],
                    'email'     => $post['email'],
                    'password'  => sha1($post['password']),
                    'ip'        => $_SERVER['REMOTE_ADDR'],
                    'create_at' => date('Y-m-d H:i:s'),
                    'activation_code' => md5(time()),
                );

				$this->authcx->register($dataUser, $post['code']);
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

			case "logged":
				$tpl['codepage'] = "logged";
				$this->layout->setTitle("Vous devez être connecté");
				break;

			case "noaccess":
				$tpl['codepage'] = "noaccess";
				$this->layout->setTitle("Vous n'êtes pas autorisé");
				break;

            default:
                show_404();

        }

        $this->layout->view('auth/confirmation.php', $tpl);
    }

}