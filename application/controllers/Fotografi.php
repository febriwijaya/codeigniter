<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fotografi extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('fotografi_m');
  }

  public function index()
  {
    $data['row'] =  $this->fotografi_m->get();
    $data['title'] = "Data Fotografi";
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('fotografi/fotografi_data', $data);
    $this->load->view('template/footer');
  }


  public function del()
  {
    $id = $this->input->post('id');
    $this->fotografi_m->del($id);

    if ($this->db->affected_rows() > 0) {
      echo "<script>
          alert('Data berhasil dihapus!');
        </script>";
    }
    echo "<script>
          window.location =' " . base_url('fotografi') . "';
        </script>";
  }

  function fotografi_print()
  {
    $data['row'] = $this->fotografi_m->get();
    $html = $this->load->view('print/fotografi_print', $data, true);
    $this->fungsi->PdfGenerator($html, 'Fotografi', 'A4', 'potrait');
  }
}
