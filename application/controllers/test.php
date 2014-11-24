<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {


public function __construct()
	{
		parent::__construct();

		# $this->load->database(); # remove if auto-loading
		$this->load->model('part_model');
		$this->load->model('supplier_model');
		 $this->load->model('component_model');
		$this->load->model('test_model');
		 $this->load->model('invoice_model');

		$this->load->helper('form');
		$this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('invoice_test');
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

	public function add_invoice()
	{
		$invoice = $this->invoice_model->add_new();
		$data['invoice'] = $invoice;
		$this->load->view('component_test', $data);

	}

	public function display_invoice()
	{
		$result = $this->invoice_model->get();
		print_r($result);
	}

	public function add_component()
	{
		$this->part_model->add_new();
	}

	public function display_component()
	{
		$result = $this->part_model->get();
		print_r($result);
}

