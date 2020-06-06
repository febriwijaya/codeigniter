<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function login()
  {
    check_already_login();
    $data['title'] = "Login";
    $this->load->view('template/header', $data);
    $this->load->view('login');
    $this->load->view('template/footer');
  }

  public function proses()
  {
    $post = $this->input->post(null, true);
    if (isset($post['login'])) {
      $this->load->model('user_m');
      $query = $this->user_m->login($post);
      if ($query->num_rows() > 0) {
        $row = $query->row();
        $params = [
          'user_id' => $row->user_id,
          'level' => $row->level
        ];
        $this->session->set_userdata($params);
        echo "<script>
          alert('Selamat, login berhasil');
          window.location = '" . base_url('dashboard') . "';
        </script>";
      } else {
        echo "<script>
          alert('Login gagal, username atau password salah!');
          window.location='" . base_url('auth/login') . "';
        </script>";
      }
    }
  }

  public function logout()
  {
    $params = ['user_id', 'level'];
    $this->session->unset_userdata($params);
    redirect('auth/login');
  }
}
