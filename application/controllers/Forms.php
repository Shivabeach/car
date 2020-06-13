<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

	public function equipment()
	{
		$this->form_validation->set_error_delimiters('<li class="error">', '</li>');
  	$data = [
			'material' => trim($this->input->post('material')),
			'type'     => trim($this->input->post('type')),
			'company'  => trim($this->input->post('company')),
			'unit'     => trim($this->input->post('unit')),
			'quantity' => trim($this->input->post('quantity')),
			'shipping' => trim($this->input->post('shipping'))
    ];

    $this->form_validation->set_rules('material', 'Product Ordered', 'required|trim');
    $this->form_validation->set_rules('type', 'Product Type', 'required|trim');
    $this->form_validation->set_rules('company', 'Name', 'required|trim');
    $this->form_validation->set_rules('unit', 'Unit Cost', 'required|trim');
    $this->form_validation->set_rules('quantity', 'Quantity Ordered', 'required|trim');
    $this->form_validation->set_rules('shipping', 'Shipping Cost', 'trim');
    $this->form_validation->set_rules('total', 'Total Cost', 'trim');


    if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
			$dins = [
				'material' => trim($this->input->post('material')),
				'type'     => trim($this->input->post('type')),
				'company'  => trim($this->input->post('company')),
				'unit'     => trim($this->input->post('unit')),
				'quantity' => trim($this->input->post('quantity')),
				'shipping' => trim($this->input->post('shipping')),
				'total'    => ($this->input->post('quantity') * $this->input->post('unit')) + $this->input->post('shipping')
    		];
			$this->db->insert('costs', $dins);
			echo "Yuge Success";
		}
	}

	public function calendar()
	{
		$this->form_validation->set_error_delimiters('<li class="error">', '</li>');
		$data = [
			'date' => trim($this->input->post('date')),
			'data' => trim($this->input->post('data'))
		];
		$this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('data', 'Data Info', 'required|trim');
    if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('main', $data);
			echo "Yuge Success";
		}
	}

	public function blog()
	{
		$data = [
			"date"    => $this->input->post("date"),
			"heading" => $this->input->post("heading"),
			"content" => $this->input->post("content")
		];

		$this->form_validation->set_rules("date", "Date", "required|trim");
		$this->form_validation->set_rules("heading", "Heading", "required|trim");
		$this->form_validation->set_rules("content", "Content", "required");

		if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('blog', $data);
			echo "Blog Success";
		}
	}

	public function search() {
		if($query = $this->general->searched())
		{
			$data['found'] = $query;
		}

	}

}

/* End of file Forms.php */
/* Location: ./application/controllers/Forms.php */