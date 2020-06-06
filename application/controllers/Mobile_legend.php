<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobile_legend extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('mobile_legend_m');
  }

  public function index()
  {
    $data['row'] =  $this->mobile_legend_m->get();
    $data['title'] = "Data Mobile Legend";
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('ml/ml_data', $data);
    $this->load->view('template/footer');
  }


  public function del()
  {
    $id = $this->input->post('id');
    $this->mobile_legend_m->del($id);

    if ($this->db->affected_rows() > 0) {
      echo "<script>
          alert('Data berhasil dihapus!');
        </script>";
    } else {
      echo "<script>
          alert('Data gagal dihapus!');
        </script>";
    }
    echo "<script>
          window.location =' " . base_url('mobile_legend') . "';
        </script>";
  }

  function ml_print()
  {
    $data['row'] = $this->mobile_legend_m->get();
    $html = $this->load->view('print/ml_print', $data, true);
    $this->fungsi->PdfGenerator($html, 'mobile_legend', 'A4', 'potrait');
  }
}
