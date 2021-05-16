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
    $this->load->view('PageDashboardKaryawan');
  }

  public function createReimbursement($id_user)
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
}


?>
