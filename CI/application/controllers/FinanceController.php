<?php
/**
 *
 */
class FinanceController extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('FinanceModel');
  }

  public function index()
  {
    // code...
    $data['reimbursements'] = $this->FinanceModel->readListReimbursement();
    $this->load->view('Finance', $data);
  }

  public function hapusReimbursement($id_reimbursement)
  {
    // code...
    $this->FinanceModel->deleteReimbursement($id_reimbursement);
  }

  public function updateStatus($id_reimbursement)
  {
    // code...
    $this->FinanceModel->updateStatusReimbursement($id_reimbursement);
  }

  public function editReimbursement($id_reimbursement)
  {
    // code...
    $this->FinanceModel->editReimbursement($id_reimbursement);
  }

  public function logout()
  {
    // code...
    session_destroy();
    redirect('LoginController');
  }

}


?>
