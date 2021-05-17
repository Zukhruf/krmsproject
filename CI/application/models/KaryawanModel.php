<?php
/**
 *
 */
class KaryawanModel extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  //Create REIMBURSEMENT
  public function createReimbursement($dataReimbursement)
  {
    // code...
    $this->db->insert('reimbursement', $dataReimbursement);
    redirect('KaryawanController');
  }

  //Get 1 REIMBURSEMENT
  public function readReimbursementListFromKaryawan($id_user)
  {
    // code...
    $query = $this->db->get_where('reimbursement', array('id_user' => $id_user));
    return $query->result();
  }

  //Delete REIMBURSEMENT
  public function deleteReimbursement($id_reimbursement)
  {
    // code...
    $this->db->delete('reimbursement', array('id_reimbursement' => $id_reimbursement));
    redirect('KaryawanController');
  }

  //Update REIMBURSEMENT
  public function updateReimbursement($id_reimbursement)
  {
    // code...
  }

  public function readReimbursement($id_reimbursement)
  {
    // code...
    $query = $this->db->get_where('reimbursement', array('id_reimbursement' => $id_reimbursement));
    return $query->result();
  }

  public function checkKaryawan($username, $password)
  {
    // code...
    $query = $this->db->get_where('user', array('username' => $username));
    if ($query->num_rows()>0) {
      $this->session->set_userdata('username', $username);
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function getIDUser($username)
  {
    // code...
    $this->db->select('id_user');
    $this->db->where('username', $username);
    $query = $this->db->get('user');
    $return = $query->row_array();
    return $return;
  }

}


?>
