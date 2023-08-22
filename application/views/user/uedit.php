<main id="main" class="main">
<?= $this->session->flashdata('pesan'); ?>
  <div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-9">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Data</h5>

            <?= form_open_multipart('user/update', ['class' => 'needs-validation', 'novalidate' => ""])?>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                <input type="hidden" name="id" value="<?= $data->id ?>">
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" id="inputText" value="<?= $data->nama ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control" id="inputEmail" >
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="text" name="password" class="form-control" id="inputEmail" >
                </div>
              </div>
              

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= site_url('user') ?>" class="btn btn-secondary">Kembali</a>
              </div>
            <?= form_close();?>

          </div>
        </div>
      </div>

    </div>
  </section>

</main><!-- End #main -->

