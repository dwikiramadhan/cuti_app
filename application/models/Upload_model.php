<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    function insert_transaksi($data)
    {
        // $this->db->truncate('transaksi');
        $this->db->insert_batch('transaksi', $data);
    }

    function insert_transaksi_pengiriman($data)
    {
        // $this->db->truncate('transaksi');
        $this->db->insert_batch('transaksi_pengiriman', $data);
    }

    function insert_produksi($data)
    {
        // $this->db->truncate('produksi');
        $this->db->insert_batch('produksi', $data);
    }

    function insert_pengembalian($data)
    {
        // $this->db->truncate('pengembalian');
        $this->db->insert_batch('pengembalian', $data);
    }

    function insert_pelimpahan($data)
    {
        // $this->db->truncate('pelimpahan');
        $this->db->insert_batch('pelimpahan', $data);
    }

    function insert_cms($data)
    {
        // $this->db->truncate('cms');
        $this->db->insert_batch('cms', $data);
    }

    function insert_cms_lts($data)
    {
        // $this->db->truncate('cms');
        $this->db->insert_batch('cms_lts', $data);
    }

    function insert_registrasi($data)
    {
        // $this->db->truncate('registrasi');
        $this->db->insert_batch('registrasi', $data);
    }

    function insert_pembayaran($data)
    {
        // $this->db->truncate('registrasi');
        $this->db->insert_batch('pembayaran', $data);
    }
}
