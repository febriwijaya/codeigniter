<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_m extends CI_Model
{

  public function add_mobile_legend($post)
  {
    $params['nama_tim'] = htmlspecialchars($post['nama_tim']);
    $params['nama_leader'] = htmlspecialchars($post['nama_leader']);
    $params['phone'] = htmlspecialchars($post['phone']);
    $params['nama_anggota'] = htmlspecialchars($post['nama_anggota']);
    $params['nama_nick'] = htmlspecialchars($post['nama_nick']);
    $this->db->insert('mobile_legend', $params);
  }

  public function add_pes($post)
  {
    $params['nama'] = htmlspecialchars($post['nama']);
    $params['perguruan'] = htmlspecialchars($post['perguruan']);
    $params['phone'] = htmlspecialchars($post['phone']);
    $params['email'] = htmlspecialchars($post['email']);
    $params['alamat'] = htmlspecialchars($post['alamat']);
    $this->db->insert('pes', $params);
  }

  public function add_short_movie($post)
  {
    $params['nama_ketua'] = htmlspecialchars($post['nama_ketua']);
    $params['nama_tim'] = htmlspecialchars($post['nama_tim']);
    $params['perguruan'] = htmlspecialchars($post['perguruan']);
    $params['phone'] = htmlspecialchars($post['phone']);
    $params['email'] = htmlspecialchars($post['email']);
    $this->db->insert('video', $params);
  }

  public function add_fotografi($post)
  {
    $params['nama'] = htmlspecialchars($post['nama']);
    $params['perguruan'] = htmlspecialchars($post['perguruan']);
    $params['phone'] = htmlspecialchars($post['phone']);
    $params['email'] = htmlspecialchars($post['email']);
    $params['alamat'] = htmlspecialchars($post['alamat']);
    $this->db->insert('fotografi', $params);
  }

  public function add_kritik($post)
  {
    $params['name'] = htmlspecialchars($post['name']);
    $params['email'] = htmlspecialchars($post['email']);
    $params['subject'] = htmlspecialchars($post['subject']);
    $params['message'] = htmlspecialchars($post['message']);
    $this->db->insert('saran', $params);
  }
}
