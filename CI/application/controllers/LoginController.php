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
	  setcookie("message", "Maaf, Username atau Password salah", time()+3600);
      redirect('AdminController');
    } else if ($this->KaryawanModel->checkKaryawan($username, $password)) {
			redirect('KaryawanController');
		} else if ($this->FinanceModel->validateFinance($username)) {
			redirect('FinanceController');
		} else {
			redirect('LoginController');
		}
	}
}
