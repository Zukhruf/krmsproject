<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('adminModel');
		$this->load->model('KaryawanModel');
		$this->load->model('FinanceModel');
	}

	public function index()
  {
    $this->load->view('SignInPage');
  }

  public function checkUser()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    if ($this->adminModel->validateAdmin($username, $password)) {
      redirect('AdminController');
    } else if ($this->KaryawanModel->checkKaryawan($username, $password)){
			redirect('KaryawanController');
		} else {
			redirect('LoginController');
		}
	}
}
