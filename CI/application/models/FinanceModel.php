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
  public function viewReimbursement($id_reimbursement)
  {
    // code...
    $query = $this->db->get_where('reimbursement', array('id_reimbursement' => $id_reimbursement));
    return $query->result();
  }

  //Update Status REIMBURSEMENT
  public function updateReimbursement($id_reimbursement, $dataUpdateReimbursement)
  {
    // code...
    //where id =?
    $this->db->where('id_reimbursement', $id_reimbursement);
    $this->db->update('reimbursement', $dataUpdateReimbursement);
    redirect('FinanceController');
  }

  public function validateFinance($username)
  {
    // code...
    $query = $this->db->get_where('user', array('username' => $username, 'role' => 'Finance'));
    if ($query->num_rows()>0) {
      $this->session->set_userdata('username', $username);
      $this->session->set_userdata('role', 'Finance');
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function deleteReimbursement($id_reimbursement)
  {
    // code...
    $this->db->delete('reimbursement', array('id_reimbursement' => $id_reimbursement));
    redirect('FinanceController');
  }

  public function getFinanceIdFinance($id_user_finance)
  {
    // code...
    $this->db->select('id_finance');
    $this->db->where('id_user', $id_user_finance);
    $query = $this->db->get('finance');
    $return = $query->row_array();
    return $return;
  }

  public function getFinanceIdUser($username)
  {
    // code...
    $this->db->select('id_user');
    $this->db->where('username', $username);
    $this->db->where('role', 'Finance');
    $query = $this->db->get('user');
    $return = $query->row_array();
    return $return;
  }

  public function getValidCount()
  {
    // code...
    $this->db->where('status_reimbursement', 'Valid');
    return $this->db->count_all_results('reimbursement');
  }

  public function getTidakValidCount()
  {
    // code...
    $this->db->where('status_reimbursement', 'Tidak Valid');
    return $this->db->count_all_results('reimbursement');
  }

  public function getPendingCount()
  {
    // code...
    $this->db->where('status_reimbursement', 'Pending');
    return $this->db->count_all_results('reimbursement');
  }

  public function getMenungguVerifikasiCount()
  {
    // code...
    $this->db->where('status_reimbursement', 'Menunggu Verifikasi');
    return $this->db->count_all_results('reimbursement');
  }

  public function getSelesaiCount()
  {
    // code...
    $this->db->where('status_reimbursement', 'Selesai');
    return $this->db->count_all_results('reimbursement');
  }
}


?>
