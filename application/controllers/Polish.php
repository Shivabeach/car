<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polish extends CI_Controller {

	public function index()
	{
		$data['title']   = "Polishing A Mustang";
    $data['header']  = "Polishing Pads";
    $data['content'] = "pages/pads";
    $this->load->view("template/template", $data);
	}
}

/* End of file Polish.php */
/* Location: ./application/controllers/Polish.php */