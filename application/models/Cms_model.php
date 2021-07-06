<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cms_model extends CI_Model
{
    var $table = 'cms'; //nama tabel dari database
    var $column_order = array(null, 'post_date','branch','no_journal','description','va','amount','db_cr'); //field yang ada di table cms
    var $column_search = array('post_date','branch','no_journal','description','va','amount','db_cr'); //field yang diizin untuk pencarian 
    var $order = array('post_date' => 'desc'); // default order 
 
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

    function get_credit_double()
    {
        $this->db->select('*, COUNT(*) as jlh');
        $this->db->from('cms');
        $this->db->where("db_cr = 'C' AND va <> '' AND status = 1");
        $this->db->group_by('va HAVING COUNT(va) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function get_debit_double()
    {
        $this->db->select('*, COUNT(*) as jlh');
        $this->db->from('cms');
        $this->db->where("db_cr = 'D' AND va <> '' AND status = 1");
        $this->db->group_by('va HAVING COUNT(va) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function get_detail_debit_double($va)
    {
        $this->db->select('*');
        $this->db->from('cms');
        if ($va) {
            $this->db->where("va IN ($va)");
        }else{
            $this->db->where("va", "1");
        }
        $this->db->where("db_cr", "D");
        $this->db->order_by('va', 'DESC');
        $query = $this->db->get();
		return $query->result();
    }

    function get_detail_credit_double($va)
    {
        $this->db->select('*');
        $this->db->from('cms');
        if ($va) {
            $this->db->where("va IN ($va)");
        }else{
            $this->db->where("va", "1");
        }
        $this->db->where("db_cr", "C");
        $this->db->order_by('va', 'DESC');
        $query = $this->db->get();
		return $query->result();
    }

    function get_cms_by_id($id_cms)
    {
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->where('id_cms', $id_cms);
        $query = $this->db->get();
		return $query->result();
    }

    function save_issue($data)
    {
        $this->db->insert('cms_issue', $data);
        $insertId = $this->db->insert_id();
		$this->db->trans_start();
		$this->db->trans_complete();
        return $insertId;
    }

    function update_cms_status($id_cms)
    {
        $this->db->set('status', 0, FALSE);
        $this->db->where('id_cms', $id_cms);
        $this->db->update('cms');
    }

    function delete_today()
    {
        $this->db->where('date(created_at) = CURRENT_DATE()');
        $this->db->delete('cms');
    }

    function get_debit_double_solved()
    {
        $this->db->select('*');
        $this->db->from('cms_issue');
        $this->db->where('db_cr', 'D');
        $query = $this->db->get();
		return $query->result();
    }

    function get_credit_double_solved()
    {
        $this->db->select('*');
        $this->db->from('cms_issue');
        $this->db->where('db_cr', 'C');
        $query = $this->db->get();
		return $query->result();
    }

    function ubah_va_cms($va_lama, $va_baru)
    {
        $this->db->set('va', $va_baru, FALSE);
        $this->db->where('va', $va_lama);
        $this->db->update('cms');
        return ($this->db->affected_rows() > 0);
    }

    function ubah_va_cms_description($description, $va_baru)
    {
        $this->db->set('va', $va_baru, FALSE);
        $this->db->where('description', $description);
        $this->db->update('cms');
        return ($this->db->affected_rows() > 0);
    }
}
?>