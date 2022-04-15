<?php

class Rekap extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['rkp'] = $this->model('Rekap_model')->getAllRekap();
        $this->view('templates/header', $data);
        $this->view('rekap/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Matakuliah';
        $data['rkp'] = $this->model('Rekap_model')->getRekapById($id);
        $this->view('templates/header', $data);
        $this->view('rekap/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Rekap_model')->tambahDataRekap($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/rekap');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/rekap');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Rekap_model')->hapusDataRekap($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/rekap');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/rekap');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Rekap_model')->getRekapById($_POST['id_rekap']));
    }

    public function ubah()
    {
        if ($this->model('Rekap_model')->ubahDataRekap($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/rekap');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/rekap');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar rekap';
        $data['rkp'] = $this->model('Rekap_model')->cariDataRekap();
        $this->view('templates/header', $data);
        $this->view('rekap/index', $data);
        $this->view('templates/footer');
    }
}
