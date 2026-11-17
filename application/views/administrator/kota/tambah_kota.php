<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Starter Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Kota</h5>

              <p class="card-text">
                <form method="post">
                  <div class="mb-3">
                    <label for="nama_kota" class="form-label">Nama Kota</label>
                    <input type="text" class="form-control" name="nama_kota059" id="nama_kota059" aria-describedby="Nama Kota">
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="Jenis_kota">Jenis Kota</label>
                    <select type="text" class="form-control" id="jenis_kota059" name="jenis_kota059" placeholder=" Masukkan Jenis Kota">
                      <option value="Kota">Kota</option>
                      <option value="Kabupaten">Kabupaten</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="Provinsi" class="form-label">Provinsi</label>
                    <textarea name="provinsi059" id="provinsi059" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="Status">Status</label>
                    <select type="text" class="form-control" id="status059" name="status059" placeholder=" Masukkan Status">
                      <option value="Aktif">Aktif</option>
                      <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Tambah</button>
                  <a href="<?= base_url('admin/kota') ?>" class="btn btn-danger">Kembali</a>
                </form>
              </p>
            </div>
          </div>

        </div>
        <!-- /.col-md-6 -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->