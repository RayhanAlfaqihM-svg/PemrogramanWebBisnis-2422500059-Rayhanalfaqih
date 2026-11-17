<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">kota</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">kota</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <a href="<?= base_url('admin/kota/tambah_kota') ?>" class="btn btn-primary">
                <i class="fa fa-plus"></i> Tambah kota
              </a>
            </div>
            <div class="card-body">
              <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message') ?>
              <?php endif; ?>

              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Kota</th>
                    <th>Jenis Kota</th>
                    <th>Provinsi</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($list_kota as $kota) : ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $kota['nama_kota059'] ?></td>
                    <td><?= $kota['jenis_kota059'] ?></td>
                    <td><?= $kota['provinsi059'] ?></td>
                    <td><?= $kota['status059'] ?></td>
                    <td>
                      <a href="<?= base_url('admin/kota/ubah_kota/')?><?= $kota['id_kota059']?>"><span class="badge bg-success">Edit</span></a>
                      <a href="<?= base_url('admin/kota/hapus/')?><?= $kota['id_kota059']?>"><span class="badge bg-danger">Hapus</span></a>
                    </td>
                  </tr>
                  <?php $no++; endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>