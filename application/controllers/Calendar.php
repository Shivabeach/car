
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function index()
	{

	}
	public function display($year = null, $month = null) {

    if (!$year) {
      $year = date('Y');
    }

    if (!$month) {
      $month = date('m');
    }

     $this->load->model('mycal');

     if ($day = $this->input->post('day')) {
	      $this->mycal->add_calendar_data(
	      "$year-$month-$day",
	      $this->input->post('data')
	      );
      }

      $data['title'] = 'Car Calendar';
      $data['header'] = "Maintenance Schedule";
      $data['calendar'] = $this->mycal->generate($year, $month);
      $data['content'] = "pages/calendar";
      $this->load->view("template/template", $data);
	}
}

/* End of file Calendar.php */
/* Location: ./application/controllers/Calendar.php */