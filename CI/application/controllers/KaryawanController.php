<?php
/**
 *
 */
class KaryawanController extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('KaryawanModel');
  }

  public function index()
  {
    // code..
    $result = $this->KaryawanModel->getIDUser($this->session->userdata('username'));
    $id_user = $result['id_user'];
    $this->session->set_userdata('id_user', $id_user);
    $result['reimbursementList'] = $this->KaryawanModel->readReimbursementListFromKaryawan($id_user);
    $this->load->view('Karyawan', $result);
  }

  public function createReimbursement($id_user)
  {
    // code...
    $id_user = $id_user;
    $nama_reimbursement = $this->input->post('nama_reimbursement');
    $deskripsi_reimbursement = $this->input->post('deskripsi_reimbursement');
    $tgl_pembelian = $this->input->post('tanggal_pembelian');
    $kategori_reimbursement = $this->input->post('kategori_reimbursement');
    $nominal_pembelian = $this->input->post('nominal_pembelian');
    $foto_bukti1 = $this->input->post('filePhoto1');
    $foto_bukti2 = $this->input->post('filePhoto2');
    $foto_bukti3 = $this->input->post('filePhoto3');

    $dataReimbursement = array('id_user' => $id_user,
      'nama_reimbursement' => $nama_reimbursement, 'jenis_reimbursement' => $kategori_reimbursement,
      'deskripsi_reimbursement' => $deskripsi_reimbursement, 'tanggal_pembelian' => $tgl_pembelian,
      'jumlah_reimbursement' => $nominal_pembelian, 'bukti_reimbursement' => $foto_bukti1,
      'bukti_reimbursement2' => $foto_bukti2, 'bukti_reimbursement3' => $foto_bukti3,
      'status_reimbursement' => 'Menunggu Verifikasi'
    );

    $this->KaryawanModel->createReimbursement($dataReimbursement);
  }

  public function editReimbursement($id_reimbursement)
  {
    // code...
  }

  public function deleteReimbursement($id_reimbursement)
  {
    // code...
    $this->KaryawanModel->deleteReimbursement($id_reimbursement);
  }

  public function readReimbursement($id_reimbursement)
  {
    // code...
    $result['detailReimbursement'] = $this->KaryawanModel->readReimbursement($id_reimbursement);
    $this->load->view('DetailReimbursement', $result);
  }
  
  public function logout()
  {
    // code...
    session_destroy();
    redirect('LoginController');
  }
}


?>
