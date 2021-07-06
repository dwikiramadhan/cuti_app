<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model
{
	function get_data()
	{
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_polda()
	{
		$this->db->select('*');
		$this->db->from('master_polda');
		$query = $this->db->get();
		return $query->result();
	}

	function get_data_satpas()
	{
		$this->db->select('*');
		$this->db->from('master_satpas');
		$query = $this->db->get();
		return $query->result();
	}

	function is_email_available($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get("user");
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	function get_user_by_email($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result();
	}

	function is_old_password($old_password, $email)
	{
		$current_password = $this->get_user_by_email($email)[0]->password;
		$pass_dec = password_verify($old_password, $current_password);
		return $pass_dec;
	}

	public function add($data, $email)
	{
		if ($this->is_email_available($email)) {
			return false;
		} else {
			$this->db->insert('user', $data);
			$insertId = $this->db->insert_id();
			$this->db->trans_start();
			$this->db->trans_complete();
			return true;
		}
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
