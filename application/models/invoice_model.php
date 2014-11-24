<?php
class Invoice_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function add_new()
	{
		$entry = array();
		$entry['invoice_number'] = $this->input->post('invoice_number');
		$entry['supplier_name'] = $this->input->post('supplier_name');

		#tests for successful insertion. Returns success/fail as boolean value. 
		$this->db->insert('invoice', $entry);
		
		$invoice = $entry['invoice_number'];
		return $invoice;
	}

	public function get($name = NULL)
	{
		$query = $this->db->get('invoice');
		return $query;
	}
}