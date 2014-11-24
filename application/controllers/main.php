<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {


public function __construct()
	{
		parent::__construct();

		# $this->load->database(); # remove if auto-loading
		$this->load->model('part_model');
		$this->load->model('supplier_model');
		$this->load->model('order_model');
		$this->load->model('test_model');
	}

	public function index()
	{
		$data['test'] = NULL;
		$this->load->view('sasstest', $data);
	}

	# implement error handling for failed query attempts.

	public function test()
	{
		$data['test'] = $this->test_model->get();
		$this->load->view('sasstest', $data);
	}
}

