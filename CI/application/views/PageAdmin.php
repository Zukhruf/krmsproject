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
                {Role}, {Username}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" id="dropdownItemNavbar" href="#"><i class="fas fa-key me-2"></i>Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Body-->
    <div class="container-fluid ms-auto me-auto" id="bodyContent">
      <h1 class="h3">Daftar Karyawan</h1>
      <!--Button Upper-->
      <div class="d-flex" id="buttonContentUpper">
        <button type="button" class="btn btn-outline-primary me-2 shadow mb-2 rounded" name="button" data-bs-toggle="modal" data-bs-target="#karyawanModal"><i class="fas fa-plus me-2"></i>Buat Karyawan</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle shadow mb-2 rounded" name="button" data-bs-toggle="dropdown"><i class="fas fa-filter me-2"></i>Filter</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle ms-auto shadow mb-2 rounded" name="button" data-bs-toggle="dropdown">Urut Berdasarkan</button>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="#">Status</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Kategori</a>
          </li>
        </ul>
      </div>
      <!--List-->
      <div class="container-fluid" id="listContent">

      </div>
      <!--Modal Buat Karyawan-->
      <div class="modal fade" id="karyawanModal">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content rounded-4">
            <form class="" action="<?php echo base_url()."index.php/AdminController/createKaryawan" ?>" method="post">
              <div class="modal-header" id="modalHeader">
                <h5 class="modal-title ms-3">Buat Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="d-flex">
                  <div class="container">
                    <div class="mb-3">
                      <label for="inputNamaKaryawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
                      <div class="col-sm">
                        <input type="text" name="" value="" class="form-control" id="NamaKaryawan" placeholder="Masukkan nama karyawan">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputUnitKerja" class="col-sm-2 col-form-label">Unit Kerja</label>
                      <div class="col-sm">
                        <input type="text" name="" value="" class="form-control" id="UnitKerja" placeholder="Masukkan unit kerja">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputEmailKaryawan" class="col-sm-2 col-form-label">No Telp Karyawan</label>
                      <div class="col-sm">
                        <input type="email" name="" value="" class="form-control" id="NoTelpKaryawan" placeholder="Masukkan no telp karyawan">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputRoleKaryawan" class="col-sm-2 col-form-label">Role Karyawan</label>
                      <div class="col-sm">
                        <input type="text" name="" value="" class="form-control" id="RoleKaryawan" placeholder="Masukkan role karyawan">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputJenisKelaminKaryawan" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm">
                        <select class="form-select" aria-label="Default select example" name="JenisKelamin">
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputAlamatKaryawan" class="col-sm-2 col-form-label">Alamat Karyawan</label>
                      <div class="col-sm">
                        <input type="text" name="" value="" class="form-control" id="AlamatKaryawan" placeholder="Masukkan alamat karyawan">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputTglLahirKaryawan" class="col-sm-2 col-form-label">Tanggal Lahir Karyawan</label>
                      <div class="col-sm">
                        <input type="text" name="" value="" class="form-control" id="TglLahirKaryawan" placeholder="Masukkan tanggal lahir karyawan">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="d-flex">
                  <button type="button" class="btn btn-confirmation btn-outline-primary ms-auto me-2 shadow mb-2 rounded" name="button"><i class="fas fa-times me-2"></i>Batal</button>
                  <button type="submit" class="btn btn-confirmation btn-outline-primary me-2 shadow mb-2 rounded" name="button"><i class="fas fa-check me-2"></i>Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>
