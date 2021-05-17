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
    $this->load->view('Admin', $result);
  }

  public function createKaryawan()
  {
    // code...
    $id_karyawan = $this->input->post('id_karyawan');
    $nama_karyawan = $this->input->post('nama_karyawan');
    $unit_kerja_karyawan = $this->input->post('unit_kerja_karyawan');
    $no_telp_karyawan = $this->input->post('no_telp_karyawan');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $alamat_karyawan = $this->input->post('alamat');
    $email_karyawan = $this->input->post('email_karyawan');
    $role_karyawan = $this->input->post('role_karyawan');
    $username_karyawan = $this->input->post('username_karyawan');
    $password = $this->input->post('password_karyawan');
    $password_karyawan = password_hash($password, PASSWORD_DEFAULT);

    $dataCreateKaryawan =
      array('id_user' => $id_karyawan, 'nama_karyawan' => $nama_karyawan,
        'unit_kerja_karyawan' => $unit_kerja_karyawan, 'no_telp_karyawan' => $no_telp_karyawan,
        'tanggal_lahir' => $tanggal_lahir, 'jenis_kelamin' => $jenis_kelamin,
        'alamat_karyawan' => $alamat_karyawan, 'email_karyawan' => $email_karyawan,
        'role_karyawan' => $role_karyawan, 'email_karyawan' => $email_karyawan,
        'password_karyawan' => $password_karyawan
    );

    $this->adminModel->createKaryawan($dataCreateKaryawan);
  }

  public function hapusKaryawan($id_karyawan)
  {
    $this->adminModel->deleteKaryawan($id_karyawan);
  }

  public function logout()
  {
    // code...
    session_destroy();
    redirect('LoginController');
  }
}


?>
