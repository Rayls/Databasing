<?php
class Test_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$query = $this->db->get('test');
		return $query->result();
	}

}