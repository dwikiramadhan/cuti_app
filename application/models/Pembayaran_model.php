<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pembayaran_model extends CI_Model
{
    //datatables ====================
    var $table = 'pembayaran'; //nama tabel dari database
    var $column_order = array(null, 'nama','no_sim','nik','jenis_permohonan','golongan_sim','va', 'biaya'); //field yang ada di table cms
    var $column_search = array('nama','no_sim','nik','jenis_permohonan','golongan_sim','va', 'biaya'); //field yang diizin untuk pencarian 
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
    //end datatables =========================================

    function get_va_double()
    {
        $this->db->select('*, COUNT(*) as jlh');
        $this->db->from('pembayaran');
        // $this->db->where('status', 1);
        $this->db->group_by('va HAVING COUNT(va) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function get_va_solved()
    {
        $this->db->select('*');
        $this->db->from('pembayaran_issue');
        $query = $this->db->get();
		return $query->result();
    }

    function delete_today()
    {
        $this->db->where('date(created_at) = CURRENT_DATE()');
        $this->db->delete('pembayaran');
    }

    function get_pembayaran_by_id($id_pembayaran)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->where('id_pembayaran', $id_pembayaran);
        $query = $this->db->get();
		return $query->result();
    }

    function save_issue_double($data)
    {
        $this->db->insert('registrasi_issue', $data);
        $insertId = $this->db->insert_id();
		$this->db->trans_start();
		$this->db->trans_complete();
        return $insertId;
    }

    function update_pembayaran_status($id_pembayaran)
    {
        $this->db->set('status', 0, FALSE);
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->update('pembayaran');
    }

    function delete_double($id_pembayaran)
    {
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->delete('pembayaran');
    }

    function delete_pembayaran_double($id_pembayaran)
    {
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->delete('pembayaran_issue');
        return ($this->db->affected_rows() > 0);
    }
}
