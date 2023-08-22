<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <?= $this->session->flashdata('pesan'); ?>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
              Tambah Data
            </button>

            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Edisi</th>
                  <th scope="col">Judul</th>
                  <th scope="col">file</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                if ($data) :
                  foreach ($data as $d) :
                    ?>
                    <tr>
                      <td style="text-align: center;"><?= $no++; ?></td>
                      <td style="text-align: center;"><?= $d['edisi'] ?></td>
                      <td style="text-align: center;"><?= $d['tgl'] ?></td>
                      <td style="text-align: center;"><a href="<?= site_url('dashboard/vflip/'.$d['id']) ?>"><img width="30px" src="<?= a('pdf/'.$d['cover']) ?>"></a></td>
                      <td class="text-center">
                        <!-- <div class="btn-group btn-group-md">
                          <a href="<?= site_url('dashboard/edit/'.$d['id']) ?>" title="edit Data" class="btn btn-success">
                            <i class="ri-edit-2-line"></i> 
                          </a>
                        </div> -->
                        <div class="btn-group btn-group-md">
                          <a href="<?= site_url('dashboard/delete/'.$d['id']) ?>" title="Hapus Data" onclick="return confirm('Yakin Data Dihapus')" class="btn btn-danger">
                            <i class="ri-delete-bin-6-line"></i> 
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>

                <?php else : ?>
                  <tr>
                    <td colspan="3" class="text-center">
                      Data Kosong
                    </td>
                  </tr>
                <?php endif; ?>

              </tbody>
            </table>
          </div>
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
