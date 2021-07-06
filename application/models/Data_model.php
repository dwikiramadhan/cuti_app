<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Data_model extends CI_Model
{
    function dashboard()
    {
        $this->db->select('*');
        $this->db->from('dashboard_count');
        $query = $this->db->get();
		return $query->result();
    }

    function registrasi_all()
    {
        $this->db->select('*');
        $this->db->from('registrasi');
        $query = $this->db->get();
        return $query->result();
    }

    function transaksi_all()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $query = $this->db->get();
        return $query->result();
    }

    function produksi_all()
    {
        $this->db->select('*');
        $this->db->from('produksi');
        $query = $this->db->get();
        return $query->result();
    }

    function pengembalian_all()
    {
        $this->db->select('*');
        $this->db->from('pengembalian');
        $query = $this->db->get();
        return $query->result();
    }

    function pelimpahan_all()
    {
        $this->db->select('*');
        $this->db->from('pelimpahan');
        $query = $this->db->get();
        return $query->result();
    }

    function cms()
    {
        $this->db->select('*');
        $this->db->from('cms_compare');
        $query = $this->db->get();
		return $query->result();
    }

    function registrasi()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('registrasi');
        $query = $this->db->get();
		return $query->result();
    }


    function registrasi_solved()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('registrasi_issue');
        $query = $this->db->get();
		return $query->result();
    }

    function transaksi()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('transaksi');
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function transaksi_solved()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('transaksi_issue');
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function produksi()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('produksi');
        // $this->db->group_by('va HAVING COUNT(*) = 1');
        $query = $this->db->get();
		return $query->result();
    }

    function produksi_solved()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('produksi_issue');
        // $this->db->group_by('va HAVING COUNT(*) = 1');
        $query = $this->db->get();
		return $query->result();
    }

    function pengembalian()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('pengembalian');
        // $this->db->group_by('va HAVING COUNT(*) = 1');
        $query = $this->db->get();
		return $query->result();
    }

    function pengembalian_solved()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('pengembalian_issue');
        // $this->db->group_by('va HAVING COUNT(*) = 1');
        $query = $this->db->get();
		return $query->result();
    }

    function pelimpahan()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('pelimpahan');
        // $this->db->group_by('va HAVING COUNT(*) = 1');
        $query = $this->db->get();
		return $query->result();
    }

    function pelimpahan_solved()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('pelimpahan_issue');
        // $this->db->group_by('va HAVING COUNT(*) = 1');
        $query = $this->db->get();
		return $query->result();
    }

    function get_registrasi_by_va($va)
    {
        $this->db->select('va');
        $this->db->from('registrasi');
        $this->db->where('va', $va);
        $query = $this->db->get();
		if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function get_cms_by_va($va)
    {
        $this->db->select('va');
        $this->db->from('cms');
        $this->db->where('va', $va);
        $query = $this->db->get();
		if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function get_cms_by_va_credit($va)
    {
        $this->db->select('va');
        $this->db->from('cms');
        $this->db->where('va', $va);
        $this->db->where('db_cr', 'C');
        $query = $this->db->get();
		if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }
    
    function get_cms_by_va_debit($va)
    {
        $this->db->select('va');
        $this->db->from('cms');
        $this->db->where('va', $va);
        $this->db->where('db_cr', 'D');
        $query = $this->db->get();
		if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function get_transaksi_by_va($va)
    {
        $this->db->select('va');
        $this->db->from('transaksi');
        $this->db->where('va', $va);
        $query = $this->db->get();
		if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function get_produksi_by_va($va)
    {
        $this->db->select('va');
        $this->db->from('produksi');
        $this->db->where('va', $va);
        $query = $this->db->get();
		if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function get_pengembalian_by_va($va)
    {
        $this->db->select('va');
        $this->db->from('pengembalian');
        $this->db->where('va', $va);
        $query = $this->db->get();
		if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function get_pelimpahan_by_va($va)
    {
        $this->db->select('va');
        $this->db->from('pelimpahan');
        $this->db->where('va', $va);
        $query = $this->db->get();
		if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function jlh_compare_cms_transaksi()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('transaksi', 'cms.va = transaksi.va', 'inner');
        $this->db->where('cms.db_cr','C');
        $this->db->where('cms.status','1');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_cms_registrasi()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('registrasi', 'cms.va = registrasi.va', 'inner');
        $this->db->where('cms.db_cr','C');
        $this->db->where('cms.status','1');
        // $this->db->group_by('cms.va');
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_transaksi()
    {
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->join('transaksi', 'cms.va = transaksi.va', 'inner');
        $this->db->where('cms.db_cr','C');
        $this->db->where('cms.status','1');
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_registrasi()
    {
        $this->db->select('registrasi.*');
        $this->db->from('cms');
        $this->db->join('registrasi', 'cms.va = registrasi.va', 'inner');
        $this->db->where('cms.db_cr','C');
        $this->db->where('cms.status',1);
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_pelimpahan()
    {
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->join('pelimpahan', 'cms.va = pelimpahan.va', 'inner');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.status',1);
        $this->db->where('cms.va <> ""');
        $this->db->where('cms.description NOT LIKE "%TRANSFER KE | SIMONLINE API #%"');
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_produksi()
    {
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->join('produksi', 'cms.va = produksi.va', 'inner');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.status',1);
        $this->db->where('cms.va <> ""');
        $this->db->where('cms.description NOT LIKE "%TRANSFER KE | SIMONLINE API #%"');
        // $this->db->where('cms.va <> ""');
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_pengembalian()
    {
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->join('pengembalian', 'cms.va = pengembalian.va', 'inner');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.status', 1);
        $this->db->where('cms.va <> ""');
        $this->db->where("cms.description NOT LIKE '%1189523007 RKP PUSKEU POLRI%'");
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_cms_transaksi_fail()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('transaksi', 'cms.va = transaksi.va', 'left');
        $this->db->where('cms.db_cr','C');
        $this->db->where('cms.description <> "JASA GIRO/BUNGA"');
        $this->db->where('transaksi.id_transaksi IS NULL');
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_cms_registrasi_fail()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('registrasi', 'cms.va = registrasi.va', 'left');
        $this->db->where('cms.db_cr','C');
        $this->db->where('cms.description <> "JASA GIRO/BUNGA"');
        $this->db->where('registrasi.id_registrasi IS NULL');
        $this->db->order_by('post_date', 'DESC');
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_transaksi_cms()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('transaksi as t');
        $this->db->where('NOT EXISTS (SELECT transaksi.va FROM cms INNER JOIN transaksi ON cms.va = transaksi.va WHERE cms.db_cr = "C" AND t.va = transaksi.va)', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_registrasi_cms()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('registrasi as r');
        $this->db->where('NOT EXISTS (SELECT registrasi.va FROM cms INNER JOIN registrasi ON cms.va = registrasi.va WHERE cms.db_cr = "C" AND r.va = registrasi.va)', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_produksi_cms_debit()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('produksi as p');
        $this->db->where('NOT EXISTS (SELECT produksi.va FROM cms INNER JOIN produksi ON cms.va = produksi.va WHERE cms.db_cr = "D" AND p.va = produksi.va AND cms.va <> "" AND cms.description NOT LIKE "%TRANSFER KE | SIMONLINE API #%")', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_produksi_cms_lts_credit()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('produksi as p');
        $this->db->where('NOT EXISTS (SELECT produksi.va FROM cms_lts INNER JOIN produksi ON cms_lts.va = produksi.va WHERE cms_lts.db_cr = "C" AND p.va = produksi.va AND cms_lts.va <> "")', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_pelimpahan_cms_debit()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('pelimpahan as p');
        $this->db->where('NOT EXISTS (SELECT pelimpahan.va FROM cms INNER JOIN pelimpahan ON cms.va = pelimpahan.va WHERE cms.db_cr = "D" AND p.va = pelimpahan.va AND cms.va <> "" AND cms.description NOT LIKE "%TRANSFER KE | SIMONLINE API #%")', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_pengembalian_cms_debit()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('pengembalian as p');
        $this->db->where('NOT EXISTS (SELECT pengembalian.va FROM cms INNER JOIN pengembalian ON cms.va = pengembalian.va WHERE cms.db_cr = "D" AND p.va = pengembalian.va AND cms.va <> "" AND cms.description NOT LIKE "%1189523007 RKP PUSKEU POLRI%")', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function compare_transaksi_cms_fail()
    {
        $this->db->select('t.*');
        $this->db->from('transaksi as t');
        $this->db->where('NOT EXISTS (SELECT transaksi.* FROM cms LEFT JOIN transaksi ON cms.va = transaksi.va WHERE cms.db_cr = "C" AND t.va = transaksi.va)', '', FALSE);
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_transaksi_fail()
    {
        $this->db->select('cms.*');
        $this->db->from('cms');
        $this->db->join('transaksi', 'cms.va = transaksi.va', 'left');
        $this->db->where('cms.db_cr','C');
        $this->db->where('cms.description <> "JASA GIRO/BUNGA"');
        $this->db->where('transaksi.id_transaksi IS NULL');
        $this->db->order_by('post_date', 'DESC');
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_registrasi_fail()
    {
        $this->db->select('cms.*');
        $this->db->from('cms');
        $this->db->join('registrasi', 'cms.va = registrasi.va', 'left');
        $this->db->where('cms.db_cr','C');
        $this->db->where('cms.description <> "JASA GIRO/BUNGA"');
        $this->db->where('registrasi.id_registrasi IS NULL');
        $this->db->order_by('post_date', 'DESC');
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_pelimpahan_fail()
    {
        $this->db->select('cms.*');
        $this->db->from('cms');
        $this->db->join('pelimpahan', 'cms.va = pelimpahan.va', 'left');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.va <> ""');
        $this->db->where('pelimpahan.id_pelimpahan IS NULL');
        $this->db->where("cms.description NOT LIKE '%TRANSFER KE | SIMONLINE API #%'");
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_produksi_fail()
    {
        $this->db->select('cms.*');
        $this->db->from('cms');
        $this->db->join('produksi', 'cms.va = produksi.va', 'left');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.va <> ""');
        $this->db->where('produksi.id_produksi IS NULL');
        $this->db->where("cms.description NOT LIKE '%TRANSFER KE | SIMONLINE API #%'");
        $query = $this->db->get();
		return $query->result();
    }

    function compare_cms_pengembalian_fail()
    {
        $this->db->select('cms.*');
        $this->db->from('cms');
        $this->db->join('pengembalian', 'cms.va = pengembalian.va', 'left');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.va <> ""');
        $this->db->where('pengembalian.id_pengembalian IS NULL');
        $this->db->where("cms.description NOT LIKE '%1189523007 RKP PUSKEU POLRI%'");
        $this->db->where("cms.description NOT LIKE '%TRANSFER KE | 7717%'");
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_cms_pelimpahan_debit()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('pelimpahan', 'cms.va = pelimpahan.va', 'inner');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.status',1);
        $this->db->where('cms.va <> ""');
        $this->db->where('cms.description NOT LIKE "%TRANSFER KE | SIMONLINE API #%"');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_cms_pelimpahan_debit_fail()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('pelimpahan', 'cms.va = pelimpahan.va', 'left');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.va <> ""');
        $this->db->where('pelimpahan.id_pelimpahan IS NULL');
        $this->db->where("cms.description NOT LIKE '%TRANSFER KE | SIMONLINE API #%'");
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_cms_produksi_debit()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('produksi', 'cms.va = produksi.va', 'inner');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.status',1);
        $this->db->where('cms.va <> ""');
        $this->db->where('cms.description NOT LIKE "%TRANSFER KE | SIMONLINE API #%"');
        // $this->db->where('cms.va <> ""');
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_cms_lts_produksi_credit()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms_lts');
        $this->db->join('produksi', 'cms_lts.va = produksi.va', 'inner');
        $this->db->where('cms_lts.db_cr','C');
        $this->db->where('cms_lts.status',1);
        $this->db->where('cms_lts.va <> ""');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_cms_produksi_debit_fail()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('produksi', 'cms.va = produksi.va', 'left');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.va <> ""');
        $this->db->where('produksi.id_produksi IS NULL');
        $this->db->where("cms.description NOT LIKE '%TRANSFER KE | SIMONLINE API #%'");
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }
    
    function jlh_compare_cms_pengembalian_debit()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('pengembalian', 'cms.va = pengembalian.va', 'inner');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.status',1);
        $this->db->where('cms.va <> ""');
        $this->db->where("cms.description NOT LIKE '%1189523007 RKP PUSKEU POLRI%'");
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_cms_pengembalian_debit_fail()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->join('pengembalian', 'cms.va = pengembalian.va', 'left');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.va <> ""');
        $this->db->where('pengembalian.id_pengembalian IS NULL');
        $this->db->where("cms.description NOT LIKE '%1189523007 RKP PUSKEU POLRI%'");
        $this->db->where("cms.description NOT LIKE '%TRANSFER KE | 7717%'");
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_cms_non_va_debit()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('cms');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.va = ""');
        $this->db->where("cms.description NOT LIKE '%1189523007 RKP PUSKEU POLRI%'");
        $this->db->where("cms.description NOT LIKE '%BY TRX ATM PRIMA%'");
        $this->db->where("cms.description NOT LIKE '%BIAYA ATM LINK%'");
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function cms_non_va_debit()
    {
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->where('cms.db_cr','D');
        $this->db->where('cms.va = ""');
        $this->db->where("cms.description NOT LIKE '%1189523007 RKP PUSKEU POLRI%'");
        $this->db->where("cms.description NOT LIKE '%BY TRX ATM PRIMA%'");
        $this->db->where("cms.description NOT LIKE '%BIAYA ATM LINK%'");
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_produksi_transaksi()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('transaksi');
        $this->db->join('produksi', 'transaksi.va = produksi.va', 'inner');
        // $this->db->group_by('va HAVING COUNT(*) > 1');
        $query = $this->db->get();
		return $query->result();
    }

    function jlh_compare_produksi_transaksi_fail()
    {
        $this->db->select('COUNT(*) as jlh_data');
        $this->db->from('transaksi');
        $this->db->where('NOT EXISTS (SELECT * FROM produksi WHERE transaksi.va = produksi.va)', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function compare_produksi_cms()
    {
        $this->db->select('*');
        $this->db->from('produksi as p');
        $this->db->where('NOT EXISTS (SELECT produksi.va FROM cms INNER JOIN produksi ON cms.va = produksi.va WHERE cms.db_cr = "D" AND p.va = produksi.va AND cms.va <> "" AND cms.description NOT LIKE "%TRANSFER KE | SIMONLINE API #%")', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function compare_produksi_cms_lts()
    {
        $this->db->select('*');
        $this->db->from('produksi as p');
        $this->db->where('NOT EXISTS (SELECT produksi.va FROM cms_lts INNER JOIN produksi ON cms_lts.va = produksi.va WHERE cms_lts.db_cr = "C" AND p.va = produksi.va AND cms_lts.va <> "")', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function compare_pelimpahan_cms()
    {
        $this->db->select('*');
        $this->db->from('pelimpahan as p');
        $this->db->where('NOT EXISTS (SELECT pelimpahan.va FROM cms INNER JOIN pelimpahan ON cms.va = pelimpahan.va WHERE cms.db_cr = "D" AND p.va = pelimpahan.va AND cms.va <> "" AND cms.description NOT LIKE "%TRANSFER KE | SIMONLINE API #%")', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function compare_pengembalian_cms()
    {
        $this->db->select('*');
        $this->db->from('pengembalian as p');
        $this->db->where('NOT EXISTS (SELECT pengembalian.va FROM cms INNER JOIN pengembalian ON cms.va = pengembalian.va WHERE cms.db_cr = "D" AND p.va = pengembalian.va AND cms.va <> "" AND cms.description NOT LIKE "%1189523007 RKP PUSKEU POLRI%")', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function compare_registrasi_cms()
    {
        $this->db->select('r.*');
        $this->db->from('registrasi as r');
        $this->db->where('NOT EXISTS (SELECT registrasi.va FROM cms INNER JOIN registrasi ON cms.va = registrasi.va WHERE cms.db_cr = "C" AND r.va = registrasi.va)', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function compare_transaksi_cms()
    {
        $this->db->select('t.*');
        $this->db->from('transaksi as t');
        $this->db->where('NOT EXISTS (SELECT transaksi.va FROM cms INNER JOIN transaksi ON cms.va = transaksi.va WHERE cms.db_cr = "C" AND t.va = transaksi.va)', '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function compare_transaksi_cms_fail_again()
    {
        $this->db->select('*');
        $this->db->from('transaksi as trans');
        $this->db->where("NOT EXISTS(SELECT * FROM cms INNER JOIN transaksi USING(va) WHERE trans.va = transaksi.va AND cms.db_cr = 'C')", '', FALSE);
        $query = $this->db->get();
		return $query->result();
    }

    function list_cms()
    {
        $this->db->select('*');
        $this->db->from('cms');
        $this->db->order_by('post_date', 'DESC');
        $query = $this->db->get();
		return $query->result();
    }

    //update dashboard
    public function update_dashboard_count($data)
	{
		$this->db->update_batch('dashboard_count', $data, 'keterangan');
	}

    // update coutn cms
    public function update_count_registrasi($data)
	{
		$this->db->update_batch('cms_compare', $data, 'keterangan');
	}

    public function update_count_transaksi($data)
	{
		$this->db->update_batch('cms_compare', $data, 'keterangan');
	}

    public function update_count_produksi($data)
	{
		$this->db->update_batch('cms_compare', $data, 'keterangan');
	}

    public function update_count_pengembalian($data)
	{
		$this->db->update_batch('cms_compare', $data, 'keterangan');
	}

    public function update_count_pelimpahan($data)
	{
		$this->db->update_batch('cms_compare', $data, 'keterangan');
	}

    public function update_count_not_va_debit($data)
	{
		$this->db->update_batch('cms_compare', $data, 'keterangan');
	}
}
