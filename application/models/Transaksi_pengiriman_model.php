<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi_pengiriman_model extends CI_Model
{
    var $table = 'transaksi_pengiriman'; //nama tabel dari database
    var $column_order = array(null, 'kode_satpas','nama_satpas','nama','va','cms_bni','benma','biaya_paket','biaya_admin','nominal','no_resi','ambil_sendiri'); //field yang ada di table cms
    var $column_search = array('kode_satpas','nama_satpas','nama','va','cms_bni','benma','biaya_paket','biaya_admin','nominal','no_resi','ambil_sendiri'); //field yang diizin untuk pencarian 
    var $order = array('created_at' => 'desc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    function get_va_double()
    {
        $this->db->select('*, COUNT(*) as jlh');
        $this->db->from('transaksi_pengiriman');
        $this->db->where('status', 1);
        $this->db->group_by('va HAVING COUNT(va) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function get_va_solved()
    {
        $this->db->select('*');
        $this->db->from('transaksi_pengiriman_issue');
        $query = $this->db->get();
		return $query->result();
    }

    function delete_today()
    {
        $this->db->where('date(created_at) = CURRENT_DATE()');
        $this->db->delete('transaksi_pengiriman');
    }

    function get_transaksi_by_id($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('transaksi_pengiriman');
        $this->db->where('id_transaksi_pengiriman', $id_transaksi);
        $query = $this->db->get();
		return $query->result();
    }

    function save_issue_double($data)
    {
        $this->db->insert('transaksi_pengiriman_issue', $data);
        $insertId = $this->db->insert_id();
		$this->db->trans_start();
		$this->db->trans_complete();
        return $insertId;
    }

    function update_transaksi_status($id_transaksi)
    {
        $this->db->set('status', 0, FALSE);
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi_pengiriman');
    }

    function delete_double($id)
    {
        $this->db->where('id_transaksi_pengiriman', $id);
        $this->db->delete('transaksi_pengiriman');
    }
}
?>