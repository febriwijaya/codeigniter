<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('saran_m');
  }

  public function index()
  {
    $data['row'] =  $this->saran_m->get();
    $data['title'] = "Data Kritik Dan Saran";
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('saran/saran_data', $data);
    $this->load->view('template/footer');
  }


  public function del()
  {
    $id = $this->input->post('id');
    $this->saran_m->del($id);

    if ($this->db->affected_rows() > 0) {
      echo "<script>
          alert('Data berhasil dihapus!');
        </script>";
    }
    echo "<script>
          window.location =' " . base_url('saran') . "';
        </script>";
  }
}
