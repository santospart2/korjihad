<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div>
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
                  <th scope="col">Nama</th>
                  <th scope="col">Role</th>
                  <th scope="col">Log</th>
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
                      <td style="text-align: center;"><?= $d['nama'] ?></td>
                      <td style="text-align: center;"><?= $d['role'] ?></td>
                      <td style="text-align: center;"><?= $d['log'] ?></td>
                      <td class="text-center">
                        <div class="btn-group btn-group-md">
                          <a href="<?= site_url('user/edit/'.$d['id']) ?>" title="edit Data" class="btn btn-success">
                            <i class="ri-edit-2-line"></i> 
                          </a>
                        </div>
                        <div class="btn-group btn-group-md">
                          <a href="<?= site_url('user/delete/'.$d['id']) ?>" title="Hapus Data" onclick="return confirm('Yakin Data Dihapus')" class="btn btn-danger">
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
  <div class="modal-dialog modal-mx">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <?= form_open_multipart('user/add', ['class' => 'needs-validation', 'novalidate' => ""])?>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" id="inputText">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" id="inputText">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputEmail">
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
