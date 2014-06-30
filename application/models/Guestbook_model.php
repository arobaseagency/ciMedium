<?php if(!defined('BASEPATH')) exit('No direct script access allowed');



class Guestbook_model extends CI_Model
{
	
	public $_table = 'guestbook';
	protected $db;
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function create($data = array())
	{
		if(emtpy($data))
		{
			return false;
		}
		
		$sql = $this->db->set($data)
						->insert($this->_table);
						
		return $sql;
	}
	
	public function getData()
	{
		$sql = $this->db->select('*')
						->from($this->_table);
						
		return $sql;
	}
	
	public function read($select = '*', $where = array(), $nb = null, $start = null)
	{
		$sql = $this->db->select($select)
						->from($this->_table)
						->where($where)
						->limit($nb, $start)
						->get()
						->result();
						
		return $sql;
	}
	
	
	public function update($where, $data = array())
	{
		if(empty($data))
		{
			return false;
		}
		
		$sql = $this->db->set($data)
						->where($where)
						->update($this->_table);
						
		return (bool) $sql;
	}
	
	
	public function delete($where)
	{
		if(is_integer($where))
		{
			$where = array('id'=>$where);
		}
		
		$sql = $this->db->where($where)
						->delete($this->_table);
						
		return (bool) $sql;
	}
	
	
	public function count($field = array(), $data = null)
	{
		$sql = $this->db->where($field, $data)
						->from($this->_table)
						->count_all_results();
						
		return (int) $sql;
	}
	
}