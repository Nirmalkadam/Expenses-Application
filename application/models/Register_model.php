<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_model extends CI_Model {

  public function insert_entry($username, $password, $email)
  {
    $data = array(
      'username' => $username,
      'password' => $password,
      'email' => $email
    );

    $this->db->insert('users', $data);
  }
}