  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Buku</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
    <div class="col-sm-12">
      <?php
        Flasher::Message();
      ?>
    </div>
  </div>
      <!-- Default box -->

      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title'] ?></h3> <div class="btn-group float-right"><a href="<?= base_url; ?>/buku/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Buku</a><a href="<?= base_url; ?>/buku/laporan" class="btn float-right btn-xs btn btn-info">Laporan Buku</a><a href="<?= base_url; ?>/buku/lihatlaporan" class="btn float-right btn-xs btn btn-warning">Lihat Laporan Buku</a></div>
        </div>
        <div class="card-body">
        
      <form action="<?= base_url; ?>/buku/cari" method="post">
 <div class="row mb-3">
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="" name="key" >
    <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
          <a class="btn btn-outline-danger" href="<?= base_url; ?>/buku" >Reset</a>
    </div>
  </div>

  </div>
</div>
    </form>
          <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Penerbit</th>
                      <th>Pengarang</th>
                      <th>Tahun</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th style="width: 150px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?> 
                    <?php foreach ($data['buku'] as $row) :?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['judul'];?></td>
                      <td><?= $row['penerbit'];?></td>
                      <td><?= $row['pengarang'];?></td>
                      <td><?= $row['tahun'];?></td>
                      <td><div class="badge badge-warning"><?= $row['nama_kategori'];?></div></td>
                      <td><?= $row['harga'];?></td>
                      <td>
                        <a href="<?= base_url; ?>/buku/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a> <a href="<?= base_url; ?>/buku/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                      </td>
                    </tr>
                    <?php $no++; endforeach; ?>
                  </tbody>
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

