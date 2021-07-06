<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Waiting_production_model extends CI_Model
{
    var $table = 'transaksi t'; //nama tabel dari database
    var $where = 'NOT EXISTS(SELECT p.va FROM produksi p WHERE t.va = p.va) AND NOT EXISTS(SELECT peng.va FROM pengembalian peng WHERE t.va = peng.va)'; //nama tabel dari database
    var $column_order = array(null, 't.tgl_transaksi', 't.va', 't.nama', 't.jam_kirim', 't.jenis_sim', 't.pelimpahan', 't.cms_bni', 't.status_pengiriman', 't.biaya_paket'); //field yang ada di table cms
    var $column_search = array('t.tgl_transaksi', 't.va', 't.nama', 't.jam_kirim', 't.jenis_sim', 't.pelimpahan', 't.cms_bni', 't.status_pengiriman', 't.biaya_paket'); //field yang diizin untuk pencarian 
    var $order = array('t.tgl_transaksi' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {   
        $this->db->from($this->table);
        $this->db->where($this->where, '', FALSE);

        $from = $this->input->post('from');
        $to = $this->input->post('to');

        if ($this->input->post('from') && $this->input->post('to')) {
            $this->db->where("(DATE(t.tgl_transaksi) BETWEEN '$from' AND '$to')");
        }

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
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
        $this->db->where($this->where, '', FALSE);
        return $this->db->count_all_results();
    }

    function get_data_export_waiting_production()
	{
		$this->db->from($this->table);
        $this->db->where($this->where, '', FALSE);
        
        $from = $this->input->post('fromDate');
        $to = $this->input->post('toDate');

        if ($this->input->post('fromDate') && $this->input->post('toDate')) {
            $this->db->where("(DATE(t.tgl_transaksi) BETWEEN '$from' AND '$to')");
        }
        $this->db->order_by('t.tgl_transaksi', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}
}
