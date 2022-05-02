<?php

class Mahasiswa extends Controller
{

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('include/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('mahasiswa/detail', $data);
        $this->view('include/footer');
    }

    public function beforeUbah($id)
    {
        $data['judul'] = 'Ubah Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('mahasiswa/ubah', $data);
        $this->view('include/footer');
    }

    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswaById($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'secondary');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        }
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'secondary');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'dark');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        }
    }

    public function login()
    {
        if ($this->model('Mahasiswa_model')->loginAdminMahasiswa()) {
            Flasher::setFlash('berhasil', 'Login', 'dark');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'Login', 'danger');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        }
    }

    public function logout()
    {
        if ($this->model('Mahasiswa_model')->logoutAdminMahasiswa()) {
            Flasher::setFlash('berhasil', 'logout', 'dark');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'logout', 'danger');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('include/footer');
    }

    public function cariAktif()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswaAktif();
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('include/footer');
    }

    public function cariTidakAktif()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswaTidakAktif();
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('include/footer');
    }

    public function cariTransfer()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswaTransfer();
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('include/footer');
    }

    public function cariCowo()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswaCowo();
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('include/footer');
    }

    public function cariCewe()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswaCewe();
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('mahasiswa/index', $data);
        $this->view('include/footer');
    }
}
