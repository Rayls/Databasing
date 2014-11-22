<?php
class Supplier_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function add_new()
	{
		$entry = array();
		$entry['supplier_name'] = $this->input->post('supplier_name');
		$entry['address'] = $this->input->post('address');
		$entry['tel_number'] = $this->input->post('tel_number');

		#tests for successful insertion. Returns success/fail as boolean value. 
		$this->db->insert('supplier', $entry);
		$num_inserts = $this->db->affected_rows();

		if($num_inserts == 0){return true;}
		else{return false;}
	}

	public function get($name = NULL)
	{
		if($name != NULL)
		{
			$supplier = $this->input->post('supplier_name');
			$query = $this->db->get_where('supplier_name', $supplier);
		}
		else
		{
			$query = $this->db->get("supplier");
		}

		return $query;
	}
}