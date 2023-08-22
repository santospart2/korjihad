<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
    Tambah Data
  </button><br><br>

  <section class="section dashboard">
    <div class="row">

      <div class="col-lg-8">
        <div class="row">

          <?php
          $no = 1;
          if ($data) :
            foreach ($data as $d) :
              ?>

              <div class="col-xxl-2 col-md-4">
                <div class="card info-card sales-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li><a class="dropdown-item" href="<?= site_url('dashboard/delete/'.$d['id']) ?>" title="Hapus Data" onclick="return confirm('Yakin Data Dihapus')">Hapus</a></li>
                    </ul>
                  </div>

                  <div class="card-body">

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <a href="<?= site_url('dashboard/vflip/'.$d['id']) ?>"><img width="70px" src="<?= a('pdf/'.$d['cover']) ?>"></a>
                      </div>
                      <div class="ps-3">
                        <span class="text-success small pt-1 fw-bold"><a href="<?= site_url('dashboard/vflip/'.$d['id']) ?>"><?= $d['edisi'] ?></a></span> 
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            <?php endforeach; ?>

          <?php else : ?>
            Data Kosong
          <?php endif; ?>


        </div>
      </div>
    </div>
  </section>

</main>

<div class="modal fade" id="tambah" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <?= form_open_multipart('dashboard/add', ['class' => 'needs-validation', 'novalidate' => ""])?>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Edisi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="edisi" id="inputText">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tgl" id="inputText">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Cover</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="file1" id="inputEmail">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">File</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="file2" id="inputEmail">
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        <?= form_close();?>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>