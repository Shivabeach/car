
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

	public function display() {
		$this->db->select("material, type, company, unit, quantity");
		$this->db->order_by("type", "asc");
		$query = $this->db->get("costs");
		return $query->result();
	}

	public function searched()
	{
		$value = trim($this->input->post("search"));
		$this->db->select("material, type, company");
		$this->db->like("material", $value);
		$this->db->or_like("type", $value);
		$this->db->or_like("company", $value);
		$this->db->group_by("type");
		$randy = $this->db->get("costs");
		return $randy->result();



	}
}

/* End of file General.php */
/* Location: ./application/models/General.php */