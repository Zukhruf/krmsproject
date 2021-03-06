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
    $query = $this->db->get_where('reimbursement', array('id_user' => $id_user, 'is_deleted' => 0));
    return $query->result();
  }

  //Delete REIMBURSEMENT
  public function deleteReimbursement($id_reimbursement)
  {
    // code...
    $d = array('is_deleted' => 1);
    $this->db->where('id_reimbursement', $id_reimbursement);
    $this->db->update('reimbursement', $d);
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
    $d = array('username' => $username, 'password' => md5($password), 'role' => 'Karyawan', 'is_deleted' => 0 );
    $query = $this->db->get_where('user', $d);
    if ($query->num_rows()>0) {
      $this->session->set_userdata('username', $username);
      $this->session->set_userdata('role', 'Karyawan');
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function getIDUser($username)
  {
    // code...
    $this->db->select('id_user','role');
    $this->db->where('username', $username);
    $query = $this->db->get('user');
    $return = $query->row_array();
    return $return;
  }
}


?>
