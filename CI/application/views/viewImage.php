<?php
if(isset($_GET['id_reimbursement'])) 
{
    $q = "select bukti_reimbursement FROM reimbursement where id_reimbursement = '".$_Get['id_reimbursement']."'"
    $query = $this->db->query($q);
    $row = mysqli_fetch_array($query);
    echo $row["bukti_reimbursement"];
}

?>