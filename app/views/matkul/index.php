<div class="container mt-3">


  <div class="row justify-content-center pt-2">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <h2 class="pt-4">Data Mata Kuliah</h2>
  <div class="row mb-3 pt-2">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahDataMkl" data-toggle="modal" data-target="#formModal">
        Tambah Data
      </button>
    </div>
  </div>

  <div class="row mb-3 justify-content-center">
    <div class="col-lg-4">
      <form action="<?= BASEURL; ?>/matkul/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari matkul.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCariMkl">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <div class="table-responsive">
    <table class="table align-middle table-striped table-hover">
      <thead class="thead" style="background-color: brown; color:white">
        <tr>
          <th>
            <center>Kode Mata Kuliah</center>
          </th>
          <th>
            <center>Nama Mata Kuliah</center>
          </th>
          <th>
            <center>Ruangan</center>
          </th>>
          <th>
            <center>Action</center>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['mkl'] as $mkl) : ?>
          <tr>
            <td>
              <center><?= $mkl['kode_matkul']; ?></center>
            </td>
            <td>
              <center><?= $mkl['nama_matkul']; ?></center>
            </td>
            <td>
              <center><?= $mkl['ruangan']; ?></center>
            </td>
            <td>
              <center>
                <a href="<?= BASEURL; ?>/matkul/detail/<?= $mkl['id_matkul']; ?>" class="btn btn-primary btn-sm">detail</a>
                <a href="<?= BASEURL; ?>/matkul/ubah/<?= $mkl['id_matkul']; ?>" class="btn btn-success btn-sm tampilModalUbahMkl" data-toggle="modal" data-target="#formModal" data-id_matkul="<?= $mkl['id_matkul']; ?>">ubah</a>
                <a href="<?= BASEURL; ?>/matkul/hapus/<?= $mkl['id_matkul']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut?');">hapus</a>
              </center>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- <div class="row">
    <div class="col-lg-6">
      <h3>Daftar matkul</h3>
      <ul class="list-group">
        <?php foreach ($data['mkl'] as $mkl) : ?>
          <li class="list-group-item">
            <?= $mkl['nama_matkul']; ?>
            <a href="<?= BASEURL; ?>/matkul/hapus/<?= $mkl['id_matkul']; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">hapus</a>
            <a href="<?= BASEURL; ?>/matkul/ubah/<?= $mkl['id_matkul']; ?>" class="badge badge-success float-right tampilModalUbahMkl" data-toggle="modal" data-target="#formModal" data-id_matkul="<?= $mkl['id_matkul']; ?>">ubah</a>
            <a href="<?= BASEURL; ?>/matkul/detail/<?= $mkl['id_matkul']; ?>" class="badge badge-primary float-right">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div> -->

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabelMkl" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelMkl">Tambah Data matkul</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/matkul/tambah" method="post">
          <input type="hidden" name="id_matkul" id="id_matkul">
          <div class="form-group">
            <label for="nama_matkul">Nama Mata Kuliah</label>
            <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="kode_matkul">Kode Mata Kuliah</label>
            <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="ruangan">Ruangan</label>
            <select class="form-control" id="ruangan" name="ruangan">
              <option value="Ruangan 1A">Ruangan 1A</option>
              <option value="Ruangan 1B">Ruangan 1B</option>
              <option value="Ruangan 2A">Ruangan 2A</option>
              <option value="Ruangan 2B">Ruangan 2B</option>
              <option value="Ruangan 3A">Ruangan 3A</option>
              <option value="Ruangan 3C">Ruangan 3B</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>