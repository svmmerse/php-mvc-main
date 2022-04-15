<div class="container mt-5">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['rkp']['nm_mhs']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['rkp']['nrp']; ?></h6>
      <p>
      <p class="card-text"> MATA KULIAH TEMPUH </p>
      <p class="card-text"><?= $data['rkp']['nm_matkul']; ?></p>
      <p class="card-text"><?= $data['rkp']['kd_matkul']; ?></p>
      <a href="<?= BASEURL; ?>/rekap" class="card-link">Kembali</a>
    </div>
  </div>

</div>