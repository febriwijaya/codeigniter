<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('daftar_m');
  }

  public function index()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules(
      'email',
      'Email',
      'trim|required|is_unique[saran.email]',
      ['is_unique'     => 'Data %s Sudah pernah dibuat sebelumnya.']
    );
    $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
    $this->form_validation->set_rules('message', 'Message', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "IT Competition Season II UMI";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/index');
      $this->load->view('templates/footer');
    } else {
      $post = $this->input->post(null, TRUE);
      $this->daftar_m->add_kritik($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('flash', 'terkirim');
      } else if ($this->db->affected_rows() <= 0) {
        $this->session->set_flashdata('flash', 'gagal');
      }
      redirect('home');
    }
  }

  public function panduanlombafotografi()
  {
    force_download('asets/images/file/panduanfoto.pdf', NULL);
  }

  public function panduanlombavideo()
  {
    force_download('asets/images/file/panduanvideo.pdf', NULL);
  }

  public function panduanML()
  {
    force_download('asets/images/file/panduanML.pdf', NULL);
  }

  public function panduanPES()
  {
    force_download('asets/images/file/panduanPES.pdf', NULL);
  }
}
