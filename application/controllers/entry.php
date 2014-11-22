<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entry extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->model('part_model');
		$this->load->model('supplier_model');
		$this->load->model('order_model');

	}

	# implement error handling for failed query attempts.
}

