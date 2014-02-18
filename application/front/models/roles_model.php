<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Roles_model extends CX_Model
{

    protected $table = 'roles';

    public function __construct()
    {
        parent::__construct();
    }


    /*
     * @param $name string
     * @return single row object
     */
    public function get_role_by_code($name)
    {
        $name = strtolower($name);

        $query = $this->db->select()->get_where($this->table, array('code' => $name));

        return $query->row();
    }

    public function get_role($id)
    {

    }

    public function get_all_roles()
    {

    }

}