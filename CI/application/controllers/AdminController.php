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
    $result['dataResult'] = $this->adminModel->readListUser();
    $this->load->view('Admin', $result);
  }

  public function createUser()
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

    $dataCreateUser =
      array('id_user' => $id_karyawan, 'nama_karyawan' => $nama_karyawan,
        'unit_kerja_karyawan' => $unit_kerja_karyawan, 'no_telp_karyawan' => $no_telp_karyawan,
        'tanggal_lahir' => $tanggal_lahir, 'jenis_kelamin' => $jenis_kelamin,
        'alamat_karyawan' => $alamat_karyawan, 'email_karyawan' => $email_karyawan,
        'role_karyawan' => $role_karyawan, 'email_karyawan' => $email_karyawan,
        'password_karyawan' => $password_karyawan
    );

    if ($role_karyawan == 'Admin') {
      $dataCreateUser =
        array('role' => $role_karyawan,
              'username' => $username_karyawan,
              'password' => $password_karyawan
        );
    } else if ($role_karyawan == 'Karyawan'){
      $dataCreateUser =
        array('id_user' => $id_karyawan, 'nama_karyawan' => $nama_karyawan,
              'unit_kerja_karyawan' => $unit_kerja_karyawan,
              'no_telp_karyawan' => $no_telp_karyawan,
              'jenis_kelamin' => $jenis_kelamin,
              'alamat_karyawan' => $alamat_karyawan,
              'tanggal_lahir' => $tanggal_lahir
      );
    } else if ($role_karyawan == 'Finance'){

    }

    $this->adminModel->createUser($dataCreateUser);
  }

  public function hapusUser($id_user)
  {
    $this->adminModel->deleteUser($id_user);
  }

  public function logout()
  {
    // code...
    session_destroy();
    redirect('LoginController');
  }
}


?>
