<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY `name`');
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function ubahDataMahasiswaById($data)
    {
        $name = strtoupper($data['name']);
        $query = "UPDATE mahasiswa SET 
                        `name` = :name,
                        email = :email,
                        `status` = :status 
                    WHERE id =:id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $name);
        $this->db->bind('email', $data['email']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataMahasiswa($data)
    {
        $name = strtoupper($data['name']);
        $query = "INSERT INTO mahasiswa VALUES ('', :name, :npm, :email, :gender, :status)";

        $this->db->query($query);
        $this->db->bind('name', $name);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->query('DELETE  FROM mahasiswa WHERE id =:id ');
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE name LIKE :keyword || npm LIKE :keyword ORDER BY `name`";
        $this->db->query($query);
        $this->db->bind('npm', "%$keyword%");
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

    public function cariMahasiswaAktif()
    {
        $query = "SELECT * FROM mahasiswa WHERE `status` = 'Aktif' ORDER BY `name`";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function cariMahasiswaTidakAktif()
    {
        $query = "SELECT * FROM mahasiswa WHERE `status` = 'Tidak Aktif' ORDER BY `name`";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function cariMahasiswaTransfer()
    {
        $query = "SELECT * FROM mahasiswa WHERE `status` = 'Transfer' ORDER BY `name`";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function cariMahasiswaCowo()
    {
        $query = "SELECT * FROM mahasiswa WHERE `gender` = 'Laki-laki' ORDER BY `name`";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function cariMahasiswaCewe()
    {
        $query = "SELECT * FROM mahasiswa WHERE `gender` = 'Perempuan' ORDER BY `name`";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function loginAdminMahasiswa()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'admin' && $password == 'ka02') {
            $_SESSION['login'] = true;
            return true;
        } else {
            return false;
        }
    }

    public function logoutAdminMahasiswa()
    {
        unset($_SESSION['login']);
        return true;
    }

    // private $mhs = [
    //     [
    //         "nama" => "Hans Evan Tatipata",
    //         "npm" => "12119740",
    //         "email" => "hansevant@gmail.com",
    //         "jurusan" => "Sistem Informasi",
    //     ],
    //     [
    //         "nama" => "Jeconiah Giovanno Tatipata",
    //         "npm" => "53121824",
    //         "email" => "jeconiah@gmail.com",
    //         "jurusan" => "Teknik Mesin",
    //     ],
    //     [
    //         "nama" => "Christine Tatipata",
    //         "npm" => "91123512",
    //         "email" => "christinect@gmail.com",
    //         "jurusan" => "Kedokteran",
    //     ]
    // ];

    // public function getAllMahasiswa()
    // {
    //     return $this->mhs;
    // }
}
