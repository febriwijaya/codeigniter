<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_m extends CI_Model
{

  public function get($id = null)
  {
    $this->db->from('video');
    if ($id != null) {
      $this->db->where('id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('video');
  }
}
