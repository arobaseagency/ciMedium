<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Users_model extends CX_Model
{

    protected $table = 'users';


    public function __construct()
    {
        parent::__construct();
    }


    public function add_user($data = array(), $datameta = null)
    {
        $this->db->trans_start();

        foreach($data as $item => $value)
        {
            $this->db->set($item, $value);
        }
        $this->db->insert($this->table);
        $this->set_insert_last_id($this->db->insert_id());

        $this->db->trans_complete();
        if($this->db->trans_status() === FALSE)
        {
            $this->session->set_flashdata('msg', "error~<h3>Query:</h3><p>Erreur d'enregistrement des utilisateurs</p>");
            log_message('error', "Les enregistrement pour l'utilisateur ont échoués");
            return false;
        } else {
            /*
            if(isset($datameta) AND is_array($datameta))
            {
                $lastId = $this->db->insert_id();
                $this->load->model('MetasUsers_model');
                $this->metasUsers_model->add_metas($lastId, $datameta);
            }
            */

            return true;
        }
    }


}