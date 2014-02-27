<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class InfoUsers_model extends CX_Model
{

    protected $table = 'info_users';


    public function __construct()
    {
        parent::__construct();
    }


    public function add_infos($iduser, $data = array())
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
            $this->session->set_flashdata('msg', "error~<h3>Query:</h3><p>Erreur d'enregistrement des infos</p>");
            log_message('error', "Les enregistrement pour les infos a échoué");
            return false;
        } else {
            return true;
        }
    }
    

}