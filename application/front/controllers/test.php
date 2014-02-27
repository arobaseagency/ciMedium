<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Test extends CX_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->output->enable_profiler(true);
        
    }


    public function formulaire()
    {
        $this->load->library('form_validation');
        $data = array();

        //var_dump($this->session->all_userdata());

        if($this->input->post())
        {
            if($this->form_validation->run('register') == false)
            {
                $data['alert'] = "<div class='alert alert-error'>le formulaire a échoué !!!!</div>";

            } else {
                echo "<div class='alert alert-success'>c'est un putain de succès !!!!</div>";

                $this->load->view('test/formulaire');
            }
        }

        $this->load->view('test/formulaire', $data);
    }


}