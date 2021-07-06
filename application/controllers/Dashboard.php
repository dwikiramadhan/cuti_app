<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('data_model');
	}

	public function index()
	{	
		$this->template->load('templates/contents', 'dashboard/dashboard');
	}
}
