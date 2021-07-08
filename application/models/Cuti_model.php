<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Cuti_model extends CI_Model
{

	function get_cuti()
	{
		$this->db->select('cuti.*, master_pekerja.nama_pekerja');
		$this->db->from('cuti');
		$this->db->join('master_pekerja', 'cuti.id_pekerja = master_pekerja.id', 'inner');
		$this->db->order_by('created_at', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}	
}