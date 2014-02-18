<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MetasUsers_model extends CX_Model
{

    protected $table = 'metas_users';


    public function __construct()
    {
        parent::__construct();
    }


    public function add_metas($iduser, $data = array())
    {
        $this->db->trans_start();

        $this->db->set('users_id', $iduser);
        foreach($data as $item => $value)
        {
            $this->db->set($item, $value);
        }

        $this->db->insert($this->table);

        $this->db->trans_complete();

        if($this->db->trans_status() === FALSE)
        {
            $this->session->set_flashdata('msg', "error~<h3>Query:</h3><p>Erreur d'enregistrement des metas</p>");
            log_message('error', "Les enregistrement pour les metas a échoué");
            return false;
        } else {
            return true;
        }
    }

}