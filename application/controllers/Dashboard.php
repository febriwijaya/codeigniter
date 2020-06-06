<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function index()
  {
    check_not_login();
    $data['title'] = "Dashboard";
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('dashboard');
    $this->load->view('template/footer');
  }
}
