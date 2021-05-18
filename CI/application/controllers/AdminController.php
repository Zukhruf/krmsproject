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
    $nama_karyawan = $this->input->post('nama_karyawan');
    $unit_kerja_karyawan = $this->input->post('unit_kerja_karyawan');
    $no_telp_karyawan = $this->input->post('no_telp_karyawan');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $alamat_karyawan = $this->input->post('alamat_karyawan');
    $email_karyawan = $this->input->post('email_karyawan');
    $role_karyawan = $this->input->post('role_karyawan');
    $username_karyawan = $this->input->post('username_karyawan');
    $password = $this->input->post('password_karyawan');
    $password_karyawan = password_hash($password, PASSWORD_DEFAULT);
    $q= "SELECT id_user from USER WHERE username = '$username_karyawan'";
    $query = $this->db->query($q);

    $dataCreateUser =
      array(
        'role' => $role_karyawan,
        'password' => $password_karyawan,'username' => $username_karyawan
    );

    $dataCreateKaryawan =
      array('id_user'=> $query,'nama_karyawan' => $nama_karyawan,
      'unit_kerja_karyawan' => $unit_kerja_karyawan, 'no_telp_karyawan' => $no_telp_karyawan,
      'tanggal_lahir' => $tanggal_lahir, 'jenis_kelamin' => $jenis_kelamin,
      'alamat_karyawan' => $alamat_karyawan, 'email_karyawan' => $email_karyawan
    );

    $dataCreateFinance =
      array('nama' => $nama_karyawan
    );

    if ($role_karyawan == 'Admin') {
      $dataCreateUser;
    } else if ($role_karyawan == 'Karyawan'){
      $dataCreateUser;
      $dataCreateKaryawan;
    } else if ($role_karyawan == 'Finance'){
      $dataCreateUser;
      $dataCreateFinance;
    }

    $this->adminModel->createUser1($dataCreateUser);
    $this->adminModel->createUser2($dataCreateKaryawan);
    $this->adminModel->createUser3($dataCreateFinance);
  }

  public function createKaryawan()
  {

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
