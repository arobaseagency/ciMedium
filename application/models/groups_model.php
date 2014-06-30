<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Groups_model extends MY_Model
{

    protected $table = 'groups';

    public function __construct()
    {
        parent::__construct();
    }


    /*
     * @param $name string
     * @return single row object
     */
    public function get_group_by_code($name)
    {
        $name = strtolower($name);

        $query = $this->db->select()->get_where($this->table, array('code' => $name));

        return $query;
    }


	/**
	 * Récupère les données qui seront chercher en rapport avec le code du group
	 *
	 * @param (mixt) $search
	 * @return
	 */
	public function find_group_in($search)
	{
		$query = $this->db->select('*')->from($this->table)->where_in('code', $search)->get();

		return $query;
	}
}