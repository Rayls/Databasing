<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {


public function __construct()
	{
		parent::__construct();

		# $this->load->database(); # remove if auto-loading
		$this->load->model('part_model');
		$this->load->model('supplier_model');
		$this->load->model('order_model');
		$this->load->model('test_model');

		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('part_test');
	}

	# implement error handling for failed query attempts.

	public function add()
	{
		$this->supplier_model->add_new();
	}

	public function display()
	{
		$query = $this->supplier_model->get();
		print_r($query);
	}

	public function add_part()
	{
		$this->part_model->add_new();
	}

	public function display_part()
	{
		$result = $this->part_model->get();
		print_r($result);
	}
}

