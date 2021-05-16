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
    $username = $this->input->post('InputUsername');
    $password = $this->input->post('InputPassword');
    if ($this->adminModel->validateAdmin($username, $password)) {
      redirect('AdminContoller');
    } else if ($this->KaryawanModel->checkKaryawan($username, $password)){
			redirect('KaryawanController');
		} else {
			redirect('AdminController');
		}
	}
}
