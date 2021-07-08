<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Spd_model extends CI_Model
{
	function get_employee()
	{
		$this->db->select('*');
		$this->db->from('master_pekerja');
		$query = $this->db->get();
		return $query->result();
	}

	function get_spd()
	{
		$this->db->select('*');
		$this->db->from('spd_golongan');
		$query = $this->db->get();
		return $query->result();
	}

	function get_rencana_perjalanan()
	{
		$this->db->select('*');
		$this->db->from('rencana_perjalanan');
		$this->db->order_by('created_at', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function get_spd_jabatan()
	{
		$this->db->select('*');
		$this->db->from('spd_jabatan');
		$query = $this->db->get();
		return $query->result();
	}

	function get_spd_by_item_destinasi($item, $destinasi)
	{
		$this->db->select('*');
		$this->db->from('sub_spd');
		$this->db->where('item', $item);
		$this->db->where('destinasi', $destinasi);
		$query = $this->db->get();
		return $query->result();
	}

	function save_rencana_perjalan($data)
	{
		$this->db->insert('rencana_perjalanan', $data);
        $insertId = $this->db->insert_id();
		$this->db->trans_start();
		$this->db->trans_complete();
        return $insertId;
	}

	
}
