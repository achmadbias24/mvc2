<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Projects extends CI_Controller
{
  public function index()
  {
    $this->load->view('layout/header');
    $this->load->view('projects');
  }
}
