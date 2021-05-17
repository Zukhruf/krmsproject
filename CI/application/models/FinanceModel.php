<?php
/**
 *
 */
class FinanceModel extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  //Read All List REIMBURSEMENT from All Karyawan
  public function readListReimbursement()
  {
    // code...
    $query = $this->db->get('reimbursement');
    return $query->result();
  }

  //Edit Reimbursement
  public function editReimbursement($id_reimbursement)
  {
    // code...
    //where id =?
  }

  //Update Status REIMBURSEMENT
  public function updateStatusReimbursement($id_reimbursement)
  {
    // code...
    //where id =?
  }

  public function validateFinance($username)
  {
    // code...
    $query = $this->db->get_where('finance', array('username_finance' => $username));
    if ($query->num_rows()>0) {
      $this->session->set_userdata('username_finance', $username);
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function deleteReimbursement($id_reimbursement)
  {
    // code...
    
  }
}


?>
