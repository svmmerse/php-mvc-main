<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahDataRkp" data-toggle="modal" data-target="#formModal">
        Tambah Data Rekap
      </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/rekap/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari rekap.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCariRkp">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <h3>Daftar rekap</h3>
      <ul class="list-group">
        <?php foreach ($data['rkp'] as $rkp) : ?>
          <li class="list-group-item">
            <?= $rkp['nrp']; ?> :
            <?= $rkp['nm_mhs']; ?>
            <a href="<?= BASEURL; ?>/rekap/hapus/<?= $rkp['id_rekap']; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">hapus</a>
            <a href="<?= BASEURL; ?>/rekap/ubah/<?= $rkp['id_rekap']; ?>" class="badge badge-success float-right tampilModalUbahRkp" data-toggle="modal" data-target="#formModal" data-id_rekap="<?= $rkp['id_rekap']; ?>">ubah</a>
            <a href="<?= BASEURL; ?>/rekap/detail/<?= $rkp['id_rekap']; ?>" class="badge badge-primary float-right">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabelRkp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelRkp">Tambah Data Rekap</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/rekap/tambah" method="post">
          <input type="hidden" name="id_rekap" id="id_rekap">

          <div class="form-group">
            <label for="nm_mhs">Nama Mahasiswa</label>
            <select class="form-control" name="nm_mhs">
              <?php
              $con = mysqli_connect("localhost", "root", "", "cobadulu");
              $result1 = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nama = nama AND nrp =nrp");
              while ($row1 = mysqli_fetch_array($result1)) {

                echo "<option value=$row1[nama]>$row1[nama]</option>";
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="nrp">NRP Mahasiswa</label>
            <select class="form-control" name="nrp">
              <?php
              $con = mysqli_connect("localhost", "root", "", "cobadulu");
              $result2 = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nrp = nrp");
              while ($row2 = mysqli_fetch_array($result2)) {

                echo "<option value=$row2[nrp]>$row2[nama] :$row2[nrp]</option>";
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="nm_matkul">Nama Mata Kuliah</label>
            <select class="form-control" name="nm_matkul">
              <?php
              $con = mysqli_connect("localhost", "root", "", "cobadulu");
              $result3 = mysqli_query($con, "SELECT * FROM matkul WHERE nama_matkul = nama_matkul");
              while ($row3 = mysqli_fetch_array($result3)) {

                echo "<option value=$row3[nama_matkul]>$row3[nama_matkul]</option>";
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="kd_matkul">Kode Mata Kuliah</label>
            <select class="form-control" name="kd_matkul">
              <?php
              $con = mysqli_connect("localhost", "root", "", "cobadulu");
              $result4 = mysqli_query($con, "SELECT * FROM matkul WHERE kode_matkul = kode_matkul");
              while ($row4 = mysqli_fetch_array($result4)) {

                echo "<option value=$row4[kode_matkul]>$row4[kode_matkul] : $row4[nama_matkul]</option>";
              }
              ?>
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