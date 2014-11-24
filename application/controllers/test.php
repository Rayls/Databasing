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
		$this->load->view('header');
		$this->load->view('main');
	}

	public function supplier()
	{
		$this->load->view('header');
		$this->load->view('supplier');
	}

	public function invoice()
	{
		$this->load->view('header');
		$this->load->view('invoice');
	}

	public function part()
	{
		$this->load->view('header');
		$this->load->view('part');
	}

	public function tables()
	{
		$this->load->view('header');
		$this->load->view('main'); # need tables page
	}

	#supplier functions are simply titled add() and display()

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
		$this->component_model->add_new();
	}

	public function display_component()
	{
		$result = $this->component_model->get();
		print_r($result);
	}
}

