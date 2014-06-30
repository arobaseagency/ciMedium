<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class InfoUsers_model extends MY_Model
{

    protected $table = 'info_users';
	protected $tableRelation = 'users';


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


	public function update_insert($id, $data = array())
	{
		$idExist = $this->db->get_where($this->table, array('users_id' => $id))->row();

		$this->db->trans_start();
		foreach($data as $name => $value)
		{
			if($name == 'email')
			{
				$this->db->set($name, $value);
				$this->db->where('id', $id);
				$this->db->update($this->tableRelation);

				continue;
			}
			$this->db->set($name, $value);
		}

		if(empty($idExist))
		{
			$this->db->set('users_id', $id);
			$this->db->insert($this->table);
		} else {
			$this->db->where('users_id', $id);
			$this->db->update($this->table);
		}

		$this->db->trans_complete();
        if($this->db->trans_status() === FALSE)
        {
            log_message('error', "Les enregistrement pour les infos utilisateur ont échoués");
            return false;
        } else {
            return true;
        }

	}


	public function statistic_complete_profile($iduser)
	{

	}
}