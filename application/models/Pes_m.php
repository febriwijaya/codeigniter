<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pes_m extends CI_Model
{

  public function get($id = null)
  {
    $this->db->from('pes');
    if ($id != null) {
      $this->db->where('id', $id);
    }
    $query = $this->db->get($id);
    return $query;
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('pes');
  }
}
