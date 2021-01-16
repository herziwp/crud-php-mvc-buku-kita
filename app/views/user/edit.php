  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman User</h1>
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
              <form role="form" action="<?= base_url; ?>/user/updateUser" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control" placeholder="masukkan nama..." name="nama" value="<?= $data['user']['nama']; ?>" autofocus>
                  </div>
                  <div class="form-group">
                    <label >Username</label>
                    <input type="text" class="form-control" placeholder="masukkan username..." name="username" value="<?= $data['user']['username']; ?>" readonly>
                  </div>
                  <blockquote class="quote-warning">Abaikan jika tidak ingin mengganti password.
                </blockquote>
                  <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" placeholder="masukkan password..." name="password">
                    
                  </div>
                  <div class="form-group">
                    <label >Ulangi Password</label>
                    <input type="password" class="form-control" name="ulangi_password">
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