<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spd extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('employee_model');
		$this->load->model('spd_model');
	}

	public function index()
	{
		$data['record'] = $this->spd_model->get_rencana_perjalanan();
		$this->template->load('templates/contents', 'rencana_perjalanan', $data);
	}

	public function ajax_sub_spd($item)
	{
		$query = $this->db->get_where('sub_spd', array('item' => $item));
		$data = "<option value=''> -- Pilih -- </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->destinasi . "'>" . $value->destinasi . "</option>";
		}
		echo $data;
	}

	public function ajax_budget()
	{
		$id = $this->input->post('id_pekerja');
		$is_jabodetabek = $this->input->post('is_jabodetabek');
		$jenis_transport = $this->input->post('jenis_transport');
		$destinasi = $this->input->post('destinasi');

		$employee = $this->employee_model->get_employee_by_id($id);
		$temp = array();
		
		$jabatan = $employee[0]->kode_jabatan;
		if ($jabatan == 'Vice President' || $jabatan == 'Direktur' || $jabatan == 'Manager' || $jabatan == 'Wakil Direktur' || $jabatan == 'Asisten Manager' || $jabatan == 'Ka.') {
			$spd_jabatan = $this->spd_model->get_spd_jabatan();
			foreach ($spd_jabatan as $sj) {
				if ($sj->nama_jabatan == $employee[0]->kode_jabatan) {
					array_push($temp, $sj);
				}
			}
		} else {
			$spd = $this->spd_model->get_spd();
			foreach ($spd as $s) {
				$gol = explode(",", $s->gol_upah);
				foreach ($gol as $g) {
					if ($employee[0]->gol_upah == $g) {
						array_push($temp, $s);
					}
				}
			}
		}

		$sub_spd = $this->spd_model->get_spd_by_item_destinasi($jenis_transport, $destinasi);
		array_push($temp, $sub_spd[0]);


		echo json_encode($temp);
	}

	public function count_budget($id, $is_jabodetabek, $jenis_transport, $destinasi)
	{
		$employee = $this->employee_model->get_employee_by_id($id);
		$temp = array();

		$jabatan = $employee[0]->kode_jabatan;
		if ($jabatan == 'Vice President' || $jabatan == 'Direktur' || $jabatan == 'Manager' || $jabatan == 'Wakil Direktur' || $jabatan == 'Asisten Manager' || $jabatan == 'Ka.') {
			$spd_jabatan = $this->spd_model->get_spd_jabatan();
			foreach ($spd_jabatan as $sj) {
				if ($sj->nama_jabatan == $employee[0]->kode_jabatan) {
					array_push($temp, $sj);
				}
			}
		} else {
			$spd = $this->spd_model->get_spd();
			foreach ($spd as $s) {
				$gol = explode(",", $s->gol_upah);
				foreach ($gol as $g) {
					if ($employee[0]->gol_upah == $g) {
						array_push($temp, $s);
					}
				}
			}
		}

		$sub_spd = $this->spd_model->get_spd_by_item_destinasi($jenis_transport, $destinasi);
		array_push($temp, $sub_spd[0]);


		return $temp;
	}

	public function add_spd()
	{
		$id = $this->uri->segment(3);
		$employee = $this->employee_model->get_employee_by_id($id);
		$temp = array();
		$spd = $this->spd_model->get_spd();
		foreach ($spd as $s) {
			$gol = explode(",", $s->gol_upah);
			foreach ($gol as $g) {
				if ($employee[0]->gol_upah == $g) {
					array_push($temp, $s);
				}
			}
		}
		// echo '<pre>';
		// return var_dump($temp);
		// echo '</pre>';

		$data['record'] = $employee;
		$data['data_spd'] = $temp;
		$this->template->load('templates/contents', 'add_spd', $data);
	}

	public function save_spd()
	{
		date_default_timezone_set('Asia/Jakarta');
        $date = date("Y-m-d H:i:s");

		$id_pekerja = $this->input->post('id_pekerja');
		$is_jabodetabek = $this->input->post('is_jabodetabek');
		$jenis_transport = $this->input->post('jenis_transport');
		$destinasi = $this->input->post('destinasi');
		$tgl_perjalanan = $this->input->post('tgl_perjalanan');
		$test = $this->count_budget($id_pekerja, $is_jabodetabek, $jenis_transport, $destinasi);
		foreach ($test as $t) {
			$data['id_pekerja'] = $id_pekerja;
			$data['tgl_perjalanan'] = $tgl_perjalanan;
			$data['is_jabodetabek'] = $is_jabodetabek;
			$data['jenis_transport'] = $jenis_transport;
			$data['destinasi'] = $destinasi;
			$data['item'] = $t->item;
			$data['nominal'] = $t->nominal;
			$data['created_at'] = $date;
			$data['updated_at'] = $date;

			$sql = $this->spd_model->save_rencana_perjalan($data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                	Data berhasil di simpan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                	<span aria-hidden="true">&times;</span>
                	</button>
                	</div>');
        redirect('employee');
	}
}
