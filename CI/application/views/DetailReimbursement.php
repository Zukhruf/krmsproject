<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url()."asset/CustomCSSJS/ModalJavascript.js"?>"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()."asset/CustomCSSJS/HeaderStyle.css"; ?>">
    <link rel="stylesheet" href="<?php echo base_url()."asset/CustomCSSJS/BodyCustomStyle.css"; ?>">
    <link rel="stylesheet" href="<?php echo base_url()."asset/FA/fontawesome/css/all.css" ?>">
    <title>Reimbursement Management System</title>
  </head>
  <body>
    <!--Header-->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbarHeader">
      <div class="container-fluid">
        <a class="navbar-brand ms-2" id="logoColor" href="#">KRMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarCollapseContent"
        aria-controls="navbarCollapseContent" aria-expanded="false"
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapseContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-light" href="#"><i class="far fa-user"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {Role}, <?php echo $this->session->userdata('username');?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#"><i class="fas fa-key me-2"></i>Ubah Password</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/KaryawanController/logout"; ?>"><i class="fas fa-sign-out-alt me-2"></i>Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--body-->
    <div class="container-fluid ms-auto me-auto" id="bodyContent">
      <!--Upper Navbar Content-->
      <div class="d-flex">
        <button type="button" name="button" class="btn me-1 mb-1 rounded" id="btnBack"><i class="fas fa-arrow-left"></i></button>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb ms-2 mt-2" id="breadcrumbs">
            <li class="breadcrumb-item"><a href="<?php echo base_url()."index.php/KaryawanController" ?>">Daftar Reimbursement</a></li>
            <li class="breadcrumb-item active" aria-current="page">{IDReimbursement}</li>
          </ol>
        </nav>
        <button type="button" class="btn btn-outline-primary shadow ms-auto me-1 mb-2 rounded" name="button" id="btnHapusFilter"><i class="fas fa-trash-alt me-2"></i>HAPUS REIMBURSEMENT</button>
      </div>
      <!--Detail Reimbursement-->
      <div class="d-flex">
        <div class="container me-2" id="detailBodyContent">
          <div class="d-flex mb-4">
            <h1 class="h3 mt-1">Detail Reimbursement</h1>
            <button type="button" class="btn rounded btn-outline-primary btn-confirmation ms-auto me-2 mb-2 shadow" name="button"><i class="far fa-edit me-2"></i>UBAH DETAIL</button>
          </div>
          <div class="d-flex">
            <div class="container-fluid">
              <?php foreach ($detailReimbursement as $detail) : ?>
                <p>ID Reimbursement     : <?php echo $detail->id_reimbursement; ?></p>
                <p>Nama Reimbursement   : <?php echo $detail->nama_reimbursement; ?></p>
                <p>Tanggal Pengajuan    : <?php echo $detail->tanggal_pengajuan; ?></p>
                <p>Kategori Pembelian   : <?php echo $detail->jenis_reimbursement; ?></p>
                <p>Deskripsi Pembelian  : <?php echo $detail->deskripsi_reimbursement; ?></p>
                <p>Tanggal pembelian    : <?php echo $detail->tanggal_pembelian; ?></p>
                <p>Status               : <?php echo $detail->status_reimbursement; ?></p>
              <?php endforeach; ?>
            </div>
            <div class="container-fluid">
              <p>Nominal pembelian    : <?php  ?></p>
              <p>Bukti <?php  ?></p>
            </div>
          </div>
        </div>
        <div class="container-fluid ms-auto col" id="detailBodyContent">
          <h1 class="h3 mt-1">Riwayat Status</h1>
        </div>
      </div>
    </div>
  </body>
</html>
