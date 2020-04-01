<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
  public function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model("general");
    }

  public function index()
  {
    if($query = $this->general->blog())
    {
      $data['blog'] = $query;
    }
    if($query = $this->general->costs())
    {
      $data['cost'] = $query;
    }
    $data['title']   = "Best Car On Earth";
    $data['header']  = "Mustang Musings";
    $data['content'] = "pages/prime";
    $this->load->view("template/template", $data);
  }

  public function polish()
  {
    $data['title']   = "Polishing A Mustang";
    $data['header']  = "Polishing Pads";
    $data['content'] = "pages/pads";
    $this->load->view("template/template", $data);
  }

  public function forms()
  {
    $data['title']   = "Forms";
    $data['header']  = "Entry Forms";
    $data['content'] = "pages/forms";
    $this->load->view("template/template", $data);
  }

  public function products()
  {
    $data['title']   = "Products";
    $data['header']  = "Product Lists";
    $data['content'] = "pages/products";
    $this->load->view("template/template", $data);
  }

  public function usage()
  {
    $data['title']   = "Product Usage";
    $data['header']  = "Product Usage";
    $data['content'] = "pages/usage";
    $this->load->view("template/template", $data);
  }

  public function buy()
  {
    $data['title']   = "Product Purchasing";
    $data['header']  = "Product Purchasing";
    $data['content'] = "pages/buy";
    $this->load->view("template/template", $data);
  }

}
