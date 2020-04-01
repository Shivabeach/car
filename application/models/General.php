
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Model {

	public function blog()
	{
		$this->db->select("id, date, heading, content");
		$this->db->order_by('date', 'asc');
		$query = $this->db->get("blog");
		return $query->result();
	}

	public function costs()
	{
		$this->db->select_sum("total");
		$this->db->select_sum("shipping");
		$query = $this->db->get("costs");
		return $query->result();
	}
}

/* End of file General.php */
/* Location: ./application/models/General.php */