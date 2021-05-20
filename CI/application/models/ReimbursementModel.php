<?php
/**
 *
 */
class ReimbursementModel extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  //Create REIMBURSEMENT
  public function createReimbursement($id_user, $nama_reimbursement, $deskripsi_reimbursement,
                                      $tgl_pengajuan, $kategori_reimbursement, $nominal_pembelian,
                                      $foto_bukti1, $foto_bukti2, $foto_bukti3)
  {
    // code...
    $data = array(
      'id_user' => $id_user,
      'nama_reimbursement' => $nama_reimbursement,
      'jenis_reimbursement' => $kategori_reimbursement,
      'deskripsi_reimbursement' => $deskripsi_reimbursement,
      'tanggal_pengajuan' => $tgl_pengajuan,
      'jumlah_reimbursement' => $nominal_pembelian,
      'bukti_reimbursement' => $foto_bukti1,
      'bukti_reimbursement2' => $foto_bukti2,
      'bukti_reimbursement3' => $foto_bukti3
    );
  }

  //Get All List REIMBURSEMENT
  public function readListReimbursement()
  {
    // code...
    $query = $this->db->get('reimbursement');
  }

  //Get 1 REIMBURSEMENT
  public function readReimbursement($id_reimbursement, $id_user)
  {
    // code...
    $query = $this->db->get_where('reimbursement', array('id_reimbursement' => $id_reimbursement, 'id_user' => $id_user));
  }

  //Delete REIMBURSEMENT
  public function deleteReimbursement($id_reimbursement)
  {
    // code...
    $query = $this->db->delete('reimbursement', array('id_reimbursement' => $id_reimbursement, 'id_user' => $id_user));
  }

  //Update REIMBURSEMENT
  public function updateReimbursement($id_reimbursement)
  {
    // code...
  }
}
  //Get Image REIMBURSEMENT
  public function getImage($id_reimbursement){
    $q = "select bukti_reimbursement FROM reimbursement where id_reimbursement = '".$id_reimbursement."'"
    $query = $this->db->query($q);
    $row = $query->row_array();
    $row = $row['bukti_reimbursement']
    #$row = mysqli_fetch_array($query);
    $query -> free_result();
    
    #header("Content-type: " . $row["bukti_reimbursement"]);
    #echo $row["bukti_reimbursement"];
    
    // foreach($query->result_array() as $sq){
    //   //header('Content-type: image');
    //    $bukti_reimbursement = $sq['bukti_reimbursement']; 
    //  }
    //  //header("Content-type: image/*");
    //  echo $bukti_reimbursement;


    
    

  }
  

?>
