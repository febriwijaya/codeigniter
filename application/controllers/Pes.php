<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pes extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('pes_m');
  }

  public function index()
  {
    $data['row'] =  $this->pes_m->get();
    $data['title'] = "Data PES";
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('pes/pes_data', $data);
    $this->load->view('template/footer');
  }


  public function del()
  {
    $id = $this->input->post('id');
    $this->pes_m->del($id);

    if ($this->db->affected_rows() > 0) {
      echo "<script>
          alert('Data berhasil dihapus!');
        </script>";
    }
    echo "<script>
          window.location =' " . base_url('pes') . "';
        </script>";
  }

  function pes_print()
  {
    $data['row'] = $this->pes_m->get();
    $html = $this->load->view('print/pes_print', $data, true);
    $this->fungsi->PdfGenerator($html, 'pes_print', 'A4', 'potrait');
  }
}
