<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Users_model extends CI_Model
{
	public function getID()
	{
		$this->db->where('ID', $id);
		$query = $this->db->get('users');
		return $query->row(); 
	}
	public function getUser($id)
	{
		$query = $this->db->get('users');
		return $query->result();
	}	
	public function guardar(%data)
	{
		$this->db->insert('users', $data);
	}
	public function modificar($id, $data)
	{
		$this->db->where('ID', $id);
		$this->db->update('users', $data);
	}

    	public function borrar($id)
	{
		$this->db->where('ID', $id);
		$this->db->delete('users');
	}
}