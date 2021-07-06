<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Employee_model extends CI_Model
{
	function get_employee()
	{
		$this->db->select('*');
		$this->db->from('master_pekerja');
		$query = $this->db->get();
		return $query->result();
	}

	function get_rules_cuti_by_tahun_ke($thn_ke)
	{
		$this->db->select('*');
		$this->db->from('rules_cuti');
		$this->db->where('tahun_ke', $thn_ke);
		$query = $this->db->get();
		return $query->result();
	}

	function get_sisa_cuti_by_id_pekerja($id)
	{
		$this->db->select('*');
		$this->db->from('sisa_cuti');
		$this->db->where('id_pekerja', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function get_sisa_cuti_by_id_pekerja_limit($id)
	{
		$this->db->select('*');
		$this->db->from('sisa_cuti');
		$this->db->where('id_pekerja', $id);
		$this->db->order_by('created_at', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	function get_sisa_cuti_by_id_pekerja_new($id, $bln_tmt_pwtt)
	{
		$this_year = date("Y").'-'.$bln_tmt_pwtt.'-01';
		$next_year = date("Y", strtotime('+1 year')).'-'.$bln_tmt_pwtt.'-01';
		$this->db->select('COUNT(id) as total');
		$this->db->from('cuti');
		$this->db->where('id_pekerja', $id);
		$this->db->where("(tgl_cuti BETWEEN '$this_year' AND '$next_year')");
		$query = $this->db->get();
		return $query->result();
	}

	function get_employee_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('master_pekerja');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpan_cuti($data)
	{
		$this->db->insert('cuti', $data);
		$insertId = $this->db->insert_id();
		$this->db->trans_start();
		$this->db->trans_complete();
		return true;
	}

	public function new_sisa_cuti($data)
	{
		$this->db->insert('sisa_cuti', $data);
		$insertId = $this->db->insert_id();
		$this->db->trans_start();
		$this->db->trans_complete();
		return true;
	}

	public function update_sisa_cuti($id, $data)
	{
		$this->db->where('id_pekerja', $id);
		$this->db->update('sisa_cuti', $data);
		return true;
	}

	public function edit($data, $email, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $data);
		return true;
	}

	function ubah_password($old_password, $new_password, $email)
	{
		$cek = $this->is_old_password($old_password, $email);
		$options = [
			'cost' => 10,
		];
		$password_hash = password_hash($new_password, PASSWORD_DEFAULT, $options);
		if ($cek) {
			$this->db->set('password', $password_hash);
			$this->db->where('email', $email);
			$this->db->update('user');
			return true;
		} else {
			return false;
		}
	}
}
