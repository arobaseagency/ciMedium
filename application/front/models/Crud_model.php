<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model
{
	
	protected $table = 'animal';
	
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 *	Count result in fields
	 */
	public function count($fields = array(), $field = null)
	{
		$result = $this->db->where($fields, $field)
							->from($this->table)
							->count_all();
		return $result;
	}
	
	
	/**
	 *	Get result by ID
	 */
	public function getById($id = array())
	{
		$this->db->where($id);
		
		return $this->db->get($this->table);
	}
	
	
	/**
	 *	INSERT data in table
	 */
	public function setData($dataEscape = array(), $dataNoEscape = array())
	{
		$this->db->trans_start();
		
		$this->db->set($dataEscape)
				 ->set($dataNoEscape, null, false)
				 ->insert($this->table);
				 
		$this->db->trans_complete();
		
		if($this->db->trans_status() === false)
		{
			return throw new Exception();
		} else {
			return true;
		}
	}
	
	
	/**
	 *	GET Data from Table
	 */
	public function getData($select = '*', $where=array(), $nb=null, $start=null)
	{
		$result = $this->db->select($select)
						   ->from($this->table)
						   ->where($where)
						   ->limit($nb, $start)
						   ->get()
						   ->result();
		return $result;
	}
	
	
	/**
	 *	UPDATE your data from table
	 */
	public function update($where = array(), $data=array())
	{
		$this->db->trans_start();
		
		$this->db->set($data)
				 ->where($where)
				 ->update($this->table);
				 
		$this->db->trans_complete();
		
		if($this->db->trans_status() === false)
		{
			return throw new Exception();
		} else {
			return true;
		}
	}
	
	
	/**
	 *	DELETE data from table
	 */
	public function delete($where = array())
	{
		$this->db->trans_start();
		
		$this->db->where($where)
				 ->delete($this->table);
				 
		$this->db->trans_complete();
		if($this->db->trans_status() === false)
		{
			return throw new Exception();
		} else {
			return true;
		}
	}
	
}