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

  public function validateFinance($username, $password)
  {
    // code...
    $d = array('username' => $username, 'password' => md5($password), 'role' => 'Finance', 'is_deleted' => 0 );
    $query = $this->db->get_where('user', $d);
    if ($query->num_rows()>0) {
      $this->session->set_userdata('username', $username);
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function deleteReimbursement($id_reimbursement)
  {
    // code...
    $this->db->delete('reimbursement', array('id_reimbursement' => $id_reimbursement));
  }
}


?>
