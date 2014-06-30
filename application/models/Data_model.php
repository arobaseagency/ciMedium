<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Data_model extends CI_Model
{
	
	public function getRecords()
	{
		$query = $this->db->get('data');
		return $query->result();
	}
	
	
	public function addRecords()
	{
		$this->db->insert('data', $data);
		return;
	}
	
	public function updateRecords()
	{
		$this->db->where('id', 13);
		$this->db->update('data', $data);
	}
	
	
	public function delete()
	{
		$this->db->where('id', '');
	}
	
}