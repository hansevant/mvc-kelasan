<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('include/header', $data);
        $this->view('include/navbar');
        $this->view('home/index', $data);
        $this->view('include/footer');
    }
}
