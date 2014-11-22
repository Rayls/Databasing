<?php
class Order_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	#untested

	public function add_new()
	{
		#incomplete
		#Needs to create a new order[order number, date], 
		#then call the component model and create new components with the new order number
		$entry = array();
		$entry['price'] = $this->input->post('price');
		$entry['description'] = $this->input->post('description');
		$entry['quantity'] = $this->input->post('quantity');


		#tests for successful insertion. Returns success/fail as boolean value.
		$this->db->insert('part', $entry);
		$num_inserts = $this->db->affected_rows();

		if($num_inserts == 0){return true;}
		else{return false;}
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