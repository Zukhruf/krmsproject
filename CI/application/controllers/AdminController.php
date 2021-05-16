<?php
/**
 *
 */
class AdminController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('adminModel');
  }

  public function index()
  {
    $this->load->view('PageAdmin');
  }

  public function createKaryawan()
  {
    // code...
    
  }
}


?>
