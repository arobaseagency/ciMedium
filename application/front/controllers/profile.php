<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class Profile extends CX_Controller
{


    public function __construct()
    {
		parent::__construct();
		$this->output->enable_profiler(false);
		$this->authcx->access_logged();
		$this->authcx->in_groups( array('voyant', 'consultant') );

		$this->layout->initLayout('profile');
    }


    public function index()
    {

		$this->compte();
    }


	public function compte()
	{
		$this->layout->view('profile/compte');
	}


	public function informations()
	{
		$vars = array();

		$vars['user'] = $this->session->userdata('user_data');
		$vars['userInfo'] = $this->db->get_where('info_users', array('users_id' => $vars['user']['id']))->row_array();

		if($this->input->post())
		{
			$this->load->library('form_validation');

			if($this->form_validation->run('profile/information'))
			{

				$datadb = array();
				$this->load->model('infoUsers_model');

				$datadb['email'] = $this->input->post('email');
				$datadb['ville'] = ($this->input->post('ville') == '') ? null : $this->input->post('ville');

				if($this->input->post('sex') == 'femme' or $this->input->post('sex') == 'homme'){
					$datadb['sex'] = $this->input->post('sex');
				}

				$datadb['date_naissance'] = ($this->input->post('date_naissance') == '') ? null : $this->input->post('date_naissance');

				$iduser = $this->authcx->get_user_data('id');
				$this->infoUsers_model->update_insert($iduser, $datadb);

				$this->session->set_flashdata('msg', "info~ Vos informations ont été modifié avec Succès");
				redirect(current_url());

			}

		}

		$this->layout->view('profile/information', $vars);
	}


	/**
	 *  Callback de validation pour les dates d'anniversaires du formulaire edition informations
	 */
	public function validate_datebirth($input)
	{
		if(isset($input))
		{
			if(!preg_match("/([0-9]{4})-([0-9]{2})-([0-9]){2}/", $input))
			{
				$this->form_validation->set_message('validate_datebirth', "La %s doit être au format yyyy-mm-dd");
				return false;
			} else {
				return true;
			}
		}
	}



	public function sign_astral()
    {
        $this->load->library('form_validation');

        $jsonData = array();
        $this->output->set_content_type('application/json');

        if($this->input->is_ajax_request())
        {

            $this->form_validation->set_rules('sign_astral', 'Sign Astral', 'trim|xss_clean|matches[regex_match[/^sagitaire|belier|balance|cancer|scorpion|lion|taureau|poisson|vierge|verseau|gemeaux|capricorne$/]');

            if($this->form_validation->run())
            {
                sleep(1);
            	$this->load->model('infoUsers_model');
				$idUser = $this->authcx->get_user_data('id');

				$dataDb = array('sign_astral' => $this->input->post('sign_astral'));
				$this->infoUsers_model->update_insert($idUser, $dataDb);

                $jsonData['status'] = 1;
                $jsonData['sign'] = $this->input->post('sign_astral');

				$jsonData['msgSuccess'] = "<div style='display:block;' id='flash-msg' class='alert alert-info'>".
										  "<button type='button' class='close' data-dismiss='alert'>&times;</button>".
										  "Votre Sign astrologique a bien été enregistré ! </div>";

            }
        }

        $this->output->set_output(json_encode($jsonData));
    }



	public function password_edit()
	{
        $vars = array();
        $this->load->library('form_validation');

		if($this->input->is_ajax_request())
		{
            $this->form_validation->set_rules('old_password', 'Mot de passe Actuel', 'trim|xss_clean|required');
            $this->form_validation->set_rules('password', 'Nouveau password', 'trim|xss_clean|required|min_length[5]|max_length[12]|matches[compare_password]');
            $this->form_validation->set_rules('compare_password', 'trim|xss_clean|required|min_length[5]|max_length[12]');


            if($this->form_validation->run())
            {

            }
            else
            {
            }

            $this->load->view('profile/form_tab_password', $vars);
		} else {
            show_404();
        }
	}

    



	public function messages()
	{
		$this->layout->view('profile/message');
	}


	public function historique()
	{
		$this->layout->view('profile/historique');
	}

}