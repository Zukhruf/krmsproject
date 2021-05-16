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
    $result['dataResult'] = $this->adminModel->readListKaryawan();
    $this->load->view('PageAdmin', $result);
  }

  public function createKaryawan()
  {
    // code...
  }

  public function hapusKaryawan($id_user)
  {
    // code...
  }
}


?>
