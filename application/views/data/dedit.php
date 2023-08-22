<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Horizontal Form</h5>

            <?= form_open_multipart('dashboard/update', ['class' => 'needs-validation', 'novalidate' => ""])?>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Edisi</label>
                <input type="hidden" name="id" value="<?= $data->id ?>">
                <div class="col-sm-10">
                  <input type="text" name="edisi" class="form-control" id="inputText" value="<?= $data->edisi ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" name="judul" class="form-control" id="inputEmail" value="<?= $data->judul ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" name="file" class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="inputPassword" ><br>
                    <a target="_blank" href="<?= site_url('assets/pdf/'.$data->file) ?>" title="edit Data" class="btn btn-success">
                      <i class="bx bxs-file-pdf"></i>
                    </a>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= site_url('data') ?>" class="btn btn-secondary">Kembali</a>
              </div>
            <?= form_close();?>

          </div>
        </div>
      </div>

    </div>
  </section>

</main><!-- End #main -->

