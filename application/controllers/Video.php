<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('video_m');
  }

  public function index()
  {
    $data['row'] =  $this->video_m->get();
    $data['title'] = "Data Peserta Lomba Video";
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('video/video_data', $data);
    $this->load->view('template/footer');
  }


  public function del()
  {
    $id = $this->input->post('id');
    $this->video_m->del($id);

    if ($this->db->affected_rows() > 0) {
      echo "<script>
          alert('Data berhasil dihapus!');
        </script>";
    }
    echo "<script>
          window.location =' " . base_url('mobile_legend') . "';
        </script>";
  }

  function video_print()
  {
    $data['row'] = $this->video_m->get();
    $html = $this->load->view('print/video_print', $data, true);
    $this->fungsi->PdfGenerator($html, 'Video', 'A4', 'potrait');
  }
}
