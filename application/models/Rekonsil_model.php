<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rekonsil_model extends CI_Model
{
    var $select = 'r.nama, r.no_sim_lama, r.no_registrasi, r.jenis_permohonan, r.golongan_sim, t.tgl_transaksi, t.pelimpahan, t.va, t.cms_bni, tp.biaya_admin, tp.biaya_paket, tp.nominal, tp.no_resi, tp.kode_satpas, tp.nama_satpas, p.tgl_produksi'; //nama tabel dari database
    var $table = 'transaksi_pengiriman as tp, registrasi as r, transaksi as t, produksi as p, cms as c'; //nama tabel dari database
    var $where = 'tp.va = r.va AND r.va = t.va AND t.va = p.va AND tp.va = c.va AND c.db_cr = "D"'; //nama tabel dari database
    var $column_order = array(null, 'r.nama', 'r.no_sim_lama', 'r.no_registrasi', 'r.jenis_permohonan', 'r.golongan_sim', 't.tgl_transaksi', 't.pelimpahan', 't.va', 't.cms_bni', 'tp.biaya_admin', 'tp.biaya_paket', 'tp.nominal', 'tp.no_resi', 'tp.kode_satpas', 'tp.nama_satpas', 'p.tgl_produksi'); //field yang ada di table cms
    var $column_search = array('r.nama', 'r.no_sim_lama', 'r.no_registrasi', 'r.jenis_permohonan', 'r.golongan_sim', 't.tgl_transaksi', 't.pelimpahan', 't.va', 't.cms_bni', 'tp.biaya_admin', 'tp.biaya_paket', 'tp.nominal', 'tp.no_resi', 'tp.kode_satpas', 'tp.nama_satpas', 'p.tgl_produksi'); //field yang diizin untuk pencarian 
    var $order = array('p.tgl_produksi' => 'desc'); // default order 

    var $select_produksi = 'p.nama, p.no_sim, p.no_registrasi, p.jenis_permohonan, p.golongan_sim, p.tgl_daftar, p.tgl_produksi, tp.va, p.biaya, tp.kode_satpas, tp.nama_satpas, p.tgl_produksi, p.tgl_daftar, tp.cms_bni, tp.biaya_admin, tp.biaya_paket, tp.nominal, tp.no_resi, tp.kode_satpas'; //nama tabel dari database
    var $table_produksi = 'transaksi_pengiriman as tp, produksi as p, cms as c'; //nama tabel dari database
    var $where_produksi = 'tp.va = p.va AND p.va = c.va AND c.db_cr = "D" AND c.status = 1'; //nama tabel dari database
    
    var $select_pendaftaran = 'r.nama, r.no_sim_lama, r.no_registrasi, r.jenis_permohonan, r.golongan_sim, t.tgl_transaksi, t.jam_kirim, t.va, t.cms_bni, t.biaya_paket, t.biaya_pengiriman, p.biaya'; //nama tabel dari database
    var $table_pendaftaran = 'registrasi as r, pembayaran as p, transaksi as t, cms as c'; //nama tabel dari database
    var $where_pendaftaran = 'r.va = p.va AND p.va = t.va AND t.va = c.va AND c.db_cr = "C" AND c.status = 1'; //nama tabel dari database

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {

        $this->db->select($this->select);
        $this->db->from($this->table);
        $this->db->where($this->where);
        
        $from = $this->input->post('from');
        $to = $this->input->post('to');

        if ($this->input->post('from') && $this->input->post('to')) {
            $this->db->where("(DATE(p.tgl_produksi) BETWEEN '$from' AND '$to')");
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
        $this->db->select($this->select);
        $this->db->from($this->table);
        $this->db->where($this->where);
        return $this->db->count_all_results();
    }

    function get_data_export_produksi()
	{
        $from = $this->input->post('fromDate');
        $to = $this->input->post('toDate');
        $user = $this->input->post('user');
        $satpas_real = $this->input->post('satpas');
        
        if ($satpas_real) {
            $satpas = implode(",", $satpas_real);
        }else{
            $satpas = "";
        }


		$this->db->select($this->select_produksi);
        $this->db->from($this->table_produksi);
        $this->db->where($this->where_produksi);
        
        if ($from && $to) {
            $this->db->where("(DATE(p.tgl_produksi) BETWEEN '$from' AND '$to')");
        }

        if ($satpas != "") {
            $this->db->where("tp.kode_satpas IN ($satpas)");
        }else if ($user != "") {
            $this->db->where("tp.kode_satpas IN ($user)");
        }
        // $this->db->where("tp.kode_satpas IN (1205,1618)");
        
        $this->db->order_by('p.tgl_daftar', 'DESC');
        
		$query = $this->db->get();
		return $query->result();
	}

    function get_data_export_pendaftaran()
	{
		$this->db->select($this->select_pendaftaran);
        $this->db->from($this->table_pendaftaran);
        $this->db->where($this->where_pendaftaran);
        
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
