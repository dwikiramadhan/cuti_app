<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Satpas_model extends CI_Model
{
    //datatables ====================
    var $table = 'master_satpas'; //nama tabel dari database
    var $column_order = array(null, 'kode_polda','daerah_polda','satpas','kode_satpas','email'); //field yang ada di table cms
    var $column_search = array('kode_polda','daerah_polda','satpas','kode_satpas','email'); //field yang diizin untuk pencarian 
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

    public function get_data_satpas(){
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_satpas_by_list_kode($kode){
        $this->db->from($this->table);
        $this->db->where("kode_satpas IN ($kode)");
        $query = $this->db->get();
        return $query->result();
    }
}
