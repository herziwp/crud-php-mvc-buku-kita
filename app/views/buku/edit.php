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
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url; ?>/buku/updateBuku" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Judul</label>
                    <input type="text" class="form-control" placeholder="masukkan judul buku..." name="judul" value="<?= $data['buku']['judul'];?>">
                  </div>
                  <div class="form-group">
                    <label >Penerbit</label>
                    <input type="text" class="form-control" placeholder="masukkan penerbit buku..." name="penerbit" value="<?= $data['buku']['penerbit'];?>">
                  </div>
                  <div class="form-group">
                    <label >Pengarang</label>
                    <input type="text" class="form-control" placeholder="masukkan pengarang buku..." name="pengarang" value="<?= $data['buku']['pengarang'];?>">
                  </div>
                  <div class="form-group">
                    <label >Tahun</label>
                    <input type="text" class="form-control" placeholder="masukkan tahun buku..." name="tahun" value="<?= $data['buku']['tahun'];?>">
                  </div>
                  <div class="form-group">
                    <label >Kategori</label>
                    <select class="form-control" name="kategori_id">
                        <option value="">Pilih</option>
                         <?php foreach ($data['kategori'] as $row) :?>
                        <option value="<?= $row['id']; ?>" <?php if($data['buku']['kategori_id'] == $row['id']) { echo "selected"; } ?>><?= $row['nama_kategori']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Harga</label>
                    <input type="text" class="form-control" placeholder="masukkan harga buku..." name="harga" value="<?= $data['buku']['harga'];?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->