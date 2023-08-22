<?php 

class Mdashboard extends CI_Model
{
	function get($table)
	{
		return $this->db->get($table)->result_array();
	}
	
	function insert($table, $data, $batch = false)
	{
		return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
	}

	function getRow($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	function delete($table, $pk, $id)
	{
		return $this->db->delete($table, [$pk => $id]);
	}

	function update($table, $pk, $id, $data)
	{
		$this->db->where($pk, $id);
		return $this->db->update($table, $data);
	}

	function getUser($u)
	{
		$this->db->where('username', $u);
		$this->db->limit(1);
		return $this->db->get('tbl_user')->row();
	}

	public function cek($data)
	{
		$query = $this->db->get_where('tbl_user',$data);
		return $query;
	}
}


?>