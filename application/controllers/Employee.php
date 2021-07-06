<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('data_model');
		$this->load->model('employee_model');
	}

	public function index()
	{
		$data['record'] = $this->employee_model->get_employee();
		$this->template->load('templates/contents', 'employee', $data);
	}

	function lama_bekerja($id)
	{
		$record = $this->employee_model->get_employee_by_id($id);
		if ($record[0]->tmt_pwtt != NULL) {
			$tgl_awal = new DateTime($record[0]->tmt_pwtt);
			$tgl_now = new DateTime('today');
			$lama_bekerja = $tgl_now->diff($tgl_awal)->y;
			return $lama_bekerja;
		} else {
			return 0;
		}
	}

	public function add_cuti()
	{
		$id = $this->uri->segment(3);
		$lama_bekerja = $this->lama_bekerja($id);
		if ($lama_bekerja % 3 == 0) {
			$data['jlh_cuti'] = 26;
		} else {
			$data['jlh_cuti'] = 12;
		}

		$get_employee = $this->employee_model->get_employee_by_id($id);

		$bln_tmt_pwtt = date('m', strtotime($get_employee[0]->tmt_pwtt));

		$get_sisa_cuti = $this->employee_model->get_sisa_cuti_by_id_pekerja_new($id, $bln_tmt_pwtt);
		$jlh_cuti = $get_sisa_cuti[0]->total;
		// return var_dump($get_sisa_cuti);
		// $get_sisa_cuti = $this->employee_model->get_sisa_cuti_by_id_pekerja($id);
		// if (count($get_sisa_cuti) > 0) {
		// 	$data['sisa_cuti'] = $get_sisa_cuti[0]->sisa_tahun_ini;
		// } else {
		if ($lama_bekerja % 3 == 0) {
			$data['sisa_cuti'] = 26 - (int)$jlh_cuti;
		} else {
			$data['sisa_cuti'] = 12 - (int)$jlh_cuti;
		}
		// };

		$data['record'] = $this->employee_model->get_employee_by_id($id);
		$data['lama_bekerja'] = $lama_bekerja;
		$this->template->load('templates/contents', 'add_cuti', $data);
	}

	public function simpan_cuti()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date = date("Y-m-d H:i:s");
		$id_pekerja = $this->input->post('id_pekerja');
		$lama_bekerja = $this->lama_bekerja($id_pekerja);

		$data['id_pekerja']             = $this->input->post('id_pekerja');
		$data['tgl_cuti']             	= $this->input->post('tgl_cuti');
		$data['keterangan']             = $this->input->post('keterangan');
		$data['status']             	= 1;
		$data['created_at']             = $date;
		$data['updated_at']             = $date;

		$sql = $this->employee_model->simpan_cuti($data);

		if ($lama_bekerja % 3 == 0) {
			$get_sisa_cuti = $this->employee_model->get_sisa_cuti_by_id_pekerja($id_pekerja);
			if (count($get_sisa_cuti) == 0) {
				$sisa_cuti['sisa_sebelumnya'] 	= 26 - 1;
				$sisa_cuti['id_pekerja'] 		= $id_pekerja;
				$sisa_cuti['created_at'] 		= $date;

				$this->employee_model->new_sisa_cuti($sisa_cuti);
			}else{
				$get_sisa_cuti_limit = $this->employee_model->get_sisa_cuti_by_id_pekerja_limit($id_pekerja);
				$sisa_cuti['sisa_sebelumnya'] 	= $get_sisa_cuti_limit[0]->sisa_sebelumnya - 1;
				$sisa_cuti['id_pekerja'] 		= $id_pekerja;
				$sisa_cuti['created_at'] 		= $date;

				$this->employee_model->new_sisa_cuti($sisa_cuti);
			}
		}

		// Cek apakah query insert nya sukses atau gagal
		if ($sql) { // Jika sukses
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Berhasil di simpan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('employee');
		}
	}
}
