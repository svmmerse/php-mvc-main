<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script>
    // FUNGSI OBJECT KETIKA DI TEKAN TOMBOL
    $(function() {

        // TAMBAH DATA MAHASISWA
        $('.tombolTambahDataMhs').on('click', function() {
            $('#formModalLabelMhs').html('Tambah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama').val('');
            $('#nrp').val('');
            $('#email').val('');
            $('#jurusan').val('');
            $('#id').val('');
        });

        // UBAH DATA MAHASISWA
        $('.tampilModalUbahMhs').on('click', function() {
            $('#formModalLabelMhs').html('Ubah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', '<?= BASEURL; ?>/mahasiswa/ubah');

            const id = $(this).data('id');

            $.ajax({
                url: '<?= BASEURL; ?>/mahasiswa/getubah',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama);
                    $('#nrp').val(data.nrp);
                    $('#email').val(data.email);
                    $('#jurusan').val(data.jurusan);
                    $('#id').val(data.id);
                }
            });
        });
        // Tombol Tambah Data Matkul
        $('.tombolTambahDataMkl').on('click', function() {
            $('#formModalLabelMkl').html('Tambah Data Matakuliah');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama_matkul').val('');
            $('#kode_matkul').val('');
            $('#ruangan').val('');
            $('#id_matkul').val('');
        });

        // Tombol Ubah Matkul
        $('.tampilModalUbahMkl').on('click', function() {

            $('#formModalLabelMkl').html('Ubah Data Matakuliah');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', '<?= BASEURL; ?>/matkul/ubah');

            const id_matkul = $(this).data('id_matkul');
            $.ajax({
                url: '<?= BASEURL; ?>/matkul/getubah',
                data: {
                    id_matkul: id_matkul
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama_matkul').val(data.nama_matkul);
                    $('#kode_matkul').val(data.kode_matkul);
                    $('#ruangan').val(data.ruangan);
                    $('#id_matkul').val(data.id_matkul);
                }
            });
        });

        // TOMBOL TAMBAH REKAP
        $('.tombolTambahDataRkp').on('click', function() {
            $('#formModalLabelRkp').html('Tambah Data Rekap');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nm_mhs').val();
            $('#nrp').val();
            $('#nm_matkul').val();
            $('#kd_matkul').val();
        });

        // Tombol Ubah Rekap
        $('.tampilModalUbahRkp').on('click', function() {

            $('#formModalLabelRkp').html('Ubah Data Rekap');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', '<?= BASEURL; ?>/rekap/ubah');

            const id_rekap = $(this).data('id_rekap');
            $.ajax({
                url: '<?= BASEURL; ?>/rekap/getubah',
                data: {
                    id_rekap: id_rekap
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nm_mhs').val(data.nm_hs);
                    $('#nrp').val(data.nrp);
                    $('#nm_matkul').val(data.nm_matkul);
                    $('#kd_matkul').val(data.kd_matkul);
                    $('#id_rekap').val(data.id_rekap);
                }
            });
        });
    });
</script>
</body>

</html>