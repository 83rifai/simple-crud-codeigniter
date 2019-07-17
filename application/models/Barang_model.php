<?php
class Barang_model extends CI_Model{
	var $tableName = 'barang';

	function getall(){
		$this->db->from($this->tableName);
		return $this->db->get()->result_array();
	}
	
}
