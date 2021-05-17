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
    // code...
    $session = $this->session->userdata('username_karyawan');
    $result['reimbursementList'] = $this->KaryawanModel->readReimbursementListofKaryawan($session);
    $this->load->view('Karyawan', $result);
  }

  public function createReimbursement()
  {
    // code...
    $id_user;
    $nama_reimbursement = $this->input->post('NamaReimbursement');
    $deskripsi_reimbursement = $this->input->post('DeskripsiReimbursement');
    $tgl_pengajuan = $this->input->post('TanggalPengajuan');
    $kategori_reimbursement = $this->input->post('KategoriReimbursement');
    $nominal_pembelian = $this->input->post('NominalPembelian');
    $foto_bukti1 = $this->input->post('formFilePhoto1');
    $foto_bukti2 = $this->input->post('formFilePhoto2');
    $foto_bukti3 = $this->input->post('formFilePhoto3');
  }

  public function editReimbursement($id_reimbursement)
  {
    // code...
  }

  public function deleteReimbursement($id_reimbursement)
  {
    // code...
  }

  public function readAllReimbursement()
  {
    // code...
  }

  public function readReimbursement($id_reimbursement)
  {
    // code...
  }


    public function logout()
    {
      // code...
      session_destroy();
      redirect('LoginController');
    }
}


?>
