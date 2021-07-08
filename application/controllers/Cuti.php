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
}
