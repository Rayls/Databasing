<?php
class Part_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	#untested

	public function add_new()
	{
		$entry = array();
		$entry['price'] = $this->input->post('price');
		$entry['description'] = $this->input->post('description');
		$entry['quantity'] = $this->input->post('quantity');

		$success = $this->db->insert('part', $entry);
	}

public function get_parts($number = NULL)
	{
		if($number != NULL)
		{
			$part = $this->input->post('part_number');
			$query = $this->db->get_where('part_number', $part);
		}
		else
		{
			$query = $this->db->get("part");
		}

		return $query;
	}

}