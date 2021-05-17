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
    $this->FinanceModel->deleteReimbursement();
  }
}


?>
