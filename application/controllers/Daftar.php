<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('daftar_m');
  }

  public function index()
  {
    $data['title'] = "Pendaftaran IT Competition Season II";
    $this->load->view('daftar/index', $data);
    $this->load->view('daftar/footer');
  }

  public function mobile_legend()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules(
      'nama_tim',
      'Nama Team',
      'trim|required|is_unique[mobile_legend.nama_tim]',
      ['is_unique'     => 'Data %s Sudah pernah dibuat sebelumnya.']
    );
    $this->form_validation->set_rules('nama_leader', 'Nama nama Leader', 'trim|required');
    $this->form_validation->set_rules(
      'phone',
      'Nomor Handphone',
      'trim|required|numeric|is_unique[mobile_legend.phone]',
      ['is_unique'     => 'Data %s Sudah pernah dibuat sebelumnya.']
    );
    $this->form_validation->set_rules('nama_anggota', 'Nama nama anggota', 'trim|required');
    $this->form_validation->set_rules('nama_nick', 'Nama nama nickname', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "Tambah Data Mobile Legend";
      $this->load->view('ml/index', $data);
      $this->load->view('ml/footer');
    } else {
      $post = $this->input->post(null, TRUE);
      $this->daftar_m->add_mobile_legend($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('flash', 'terkirim');
      } else if ($this->db->affected_rows() <= 0) {
        $this->session->set_flashdata('flash', 'gagal');
      }
      redirect('daftar');
    }
  }

  public function pes()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama', 'Nama Peserta', 'trim|required');
    $this->form_validation->set_rules('perguruan', 'Institusi', 'trim|required');
    $this->form_validation->set_rules(
      'phone',
      'Nomor Handphone',
      'trim|required|numeric|is_unique[pes.phone]',
      ['is_unique'     => 'Data %s Sudah pernah dibuat sebelumnya.']
    );
    $this->form_validation->set_rules(
      'email',
      'Email',
      'trim|required|valid_email|is_unique[pes.email]',
      ['is_unique'     => 'Data %s Sudah pernah dibuat sebelumnya.']
    );
    $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "Tambah Data PES";
      $this->load->view('pes/index', $data);
      $this->load->view('pes/footer');
    } else {
      $post = $this->input->post(null, TRUE);
      $this->daftar_m->add_pes($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('flash', 'terkirim');
      } else if ($this->db->affected_rows() <= 0) {
        $this->session->set_flashdata('flash', 'gagal');
      }
      redirect('daftar');
    }
  }

  public function short_movie()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama_ketua', 'Nama Ketua Team', 'trim|required');
    $this->form_validation->set_rules('nama_tim', 'Nama nama team', 'trim|required');
    $this->form_validation->set_rules('perguruan', 'Perguruan', 'trim|required');
    $this->form_validation->set_rules(
      'phone',
      'Phone',
      'trim|required|numeric|is_unique[video.phone]',
      ['is_unique'     => 'Data %s Sudah pernah dibuat sebelumnya.']
    );
    $this->form_validation->set_rules(
      'email',
      'Email',
      'trim|required|valid_email|is_unique[video.email]',
      ['is_unique'     => 'Data %s Sudah pernah dibuat sebelumnya.']
    );

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "Tambah Data Short Movie";
      $this->load->view('video/index', $data);
      $this->load->view('video/footer');
    } else {
      $post = $this->input->post(null, TRUE);
      $this->daftar_m->add_short_movie($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('flash', 'terkirim');
      } else if ($this->db->affected_rows() <= 0) {
        $this->session->set_flashdata('flash', 'gagal');
      }
      redirect('daftar');
    }
  }

  public function fotografi()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama', 'Nama Peserta', 'trim|required');
    $this->form_validation->set_rules('perguruan', 'Institusi', 'trim|required');
    $this->form_validation->set_rules(
      'phone',
      'Nomor Handphone',
      'trim|required|numeric|is_unique[fotografi.phone]',
      ['is_unique'     => 'Data %s Sudah pernah dibuat sebelumnya.']
    );
    $this->form_validation->set_rules(
      'email',
      'Email',
      'trim|required|valid_email|is_unique[fotografi.email]',
      ['is_unique'     => 'Data %s Sudah pernah dibuat sebelumnya.']
    );
    $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "Tambah Data PES";
      $this->load->view('fotografi/index', $data);
      $this->load->view('fotografi/footer');
    } else {
      $post = $this->input->post(null, TRUE);
      $this->daftar_m->add_fotografi($post);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('flash', 'terkirim');
      } else if ($this->db->affected_rows() <= 0) {
        $this->session->set_flashdata('flash', 'gagal');
      }
      redirect('daftar');
    }
  }
}
