<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('employee_model');
		$this->load->model('cuti_model');
	}

	public function index()
	{
		$data['record'] = $this->cuti_model->get_cuti();
		$this->template->load('templates/contents', 'cuti', $data);
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$cuti = $this->cuti_model->get_cuti_by_id($id);
		$data['record'] = $cuti;
		$this->template->load('templates/contents', 'detail_cuti', $data);
	}
}
