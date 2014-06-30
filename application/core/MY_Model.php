<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Model extends CI_Model
{

    protected $table;

    /*
     * @access protected
     * @var (int)
     * Stocke le dernier ID d'une requête
     */
    protected $last_id;

    public function __construct()
    {
        parent::__construct();
    }


	/*
     *  @param $lastId (int)
     *  @return (int) $this->db->insert_id()
     *
     *  Méthode qui permet d'ajouter le dernier id d'une requête ($this->db->insert_id())
     *  de CodeIgniter dans l'attribut $this->last_id;
     */
    protected function set_insert_last_id($lastQueryId)
    {
        $this->last_id = $lastQueryId;
    }



    /*
     *  Retourne le dernier ID de la requête en respectant le nom utilisé dans codeIgniter
     *  Cette méthode permet de récupérer le dernier id de la requête passé
     *  lorsque l'on utilise les transactions dans notre insert
     *  Si non nous ne pourrions pas accéder à this->db->insert_id() et il ne renverrait rien
     */
    public function insert_id()
    {
        return $this->last_id;
    }



	/**
	 * @param (int) $id
	 *
	 * retourne la requête, il faut ensuite afficher le résultat avec les méthodes de CI model
	 * result(), row() ou bien row_array() etc...
	 */
	public function get_by_id($id)
	{
		return $this->db->get_where($this->table, array('id' => $id));
	}


    /*
     *  insert new data
     */
    public function create($opt_escape = array(), $opt_notescape = array())
    {
        if(empty($opt_escape) and empty($opt_notescape))
        {
            return false;
        }

        $this->db->trans_start();
        $query = $this->db->set($opt_escape)
                          ->set($opt_notescape, null, false)
                          ->insert($this->table);

        // On stocke le dernier id de la requête dans l'attribut $this->last_id de notre Objet
        $this->set_insert_last_id($this->db->insert_id());

        $this->db->trans_complete();

        if($this->db->trans_status() === FALSE)
        {
            $this->session->set_flashdata('msg', "error~<h3>Query:</h3><p>Erreur d'enregistrement de la Table: ".$this->table."</p>");
            log_message('error', "Les enregistrement dans la Table: ".$this->table." ont échoués");
            return false;
        } else {
            return $query;
        }
    }


    /*
     * select data in table plusieurs résultats
     */
    public function read($select = '*', $where = array(), $nb = null, $start = null)
    {
        return 	$this->db->select($select)
                            ->from($this->table)
                            ->where($where)
                            ->limit($nb, $start)
							->get()
							->result();
    }


    /*
     *  Update data in table
     */
    public function update($where, $opt_escape = array(), $opt_notescape = array())
    {
        if(empty($opt_escape) and empty($opt_notescape))
        {
            return false;
        }

        // Raccourci dans le cas où on sélectionne l'id
        if(is_integer($where))
        {
            $where = array('id' => $where);
        }

        $query = $this->db->set($opt_escape)
                            ->set($opt_notescape)
                            ->where($where)
                            ->update($this->table);

        // On stocke le dernier id updaté dans la methode $this->{nom de l'objet model}->insert_id()
        $this->set_insert_last_id($this->db->insert_id());

        return $query;
    }

    /*
     *  delete data in table
     */
    public function delete($where)
    {
        if(is_integer($where))
        {
            $where = array('id' => $where);
        }

        return $this->db->where($where)->delete($this->table);
    }

    /*
     *  Count data number in table
     */
    public function count($fields = array(), $value = null)
    {
        $query = $this->db->where($fields, $value)
                            ->from($this->table)
                            ->count_all();

        return $query;
    }

}