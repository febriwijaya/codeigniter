<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
  public function login($post)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $post['username']);
    $this->db->where('password', sha1($post['password']));
    $query = $this->db->get();
    return $query;
  }

  public function get($id = null)
  {
    $this->db->from('user');
    if ($id != null) {
      $this->db->where('user_id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params['name'] = htmlspecialchars($post['name']);
    $params['username'] = htmlspecialchars($post['username']);
    $params['password'] = htmlspecialchars(sha1($post['password']));
    $params['address'] = htmlspecialchars($post['address']);
    $params['level'] = htmlspecialchars($post['level']);
    $this->db->insert('user', $params);
  }

  public function edit($post)
  {
    $params['username'] = htmlspecialchars($post['username']);
    $params['name'] = htmlspecialchars($post['name']);
    if (!empty($post['password'])) {
      $params['password'] = htmlspecialchars(sha1($post['password']));
    }
    $params['address'] = htmlspecialchars($post['address']);
    $params['level'] = htmlspecialchars($post['level']);
    $this->db->where('user_id', $post['user_id']);
    $this->db->update('user', $params);
  }

  public function del($id)
  {
    $this->db->where('user_id', $id);
    $this->db->delete('user');
  }
}
