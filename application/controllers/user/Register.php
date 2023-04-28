<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function index()
  {
    $this->load->view('register_form');
  }

  public function submit()
  {
    
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $email = $this->input->post('email');

 

    $this->load->model('register_model');
    $this->register_model->insert_entry($username, $password, $email);

    
    redirect('some/page');
  }
}
