<?php

class About extends Controller
{
    public function index()
    {
        $data['mhs'] = $this->model('Count_model')->getCountAllMahasiswa();
        $data['mhscowo'] = $this->model('Count_model')->getCountAllMahasiswaCowo();
        $data['mhscewe'] = $this->model('Count_model')->getCountAllMahasiswaCewe();
        $data['judul'] = 'About Me';
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('about/index', $data);
        $this->view('include/footer');
    }

    public function page($nama = 'Hans', $pekerjaan = 'copet kodingan', $umur = '20')
    {

        $data['judul'] = 'My Page';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('about/page', $data);
        $this->view('include/footer');
    }
}
