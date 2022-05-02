<?php

class Count_model
{
    private $table = 'mahasiswa',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCountAllMahasiswa()
    {
        $this->db->query('SELECT count(*) FROM ' . $this->table);
        return $this->db->getCount();
    }

    public function getCountAllMahasiswaCowo()
    {
        $query = "SELECT count(*) FROM mahasiswa WHERE `gender` = 'Laki-laki' ORDER BY `name`";
        $this->db->query($query);
        return $this->db->getCount();
    }

    public function getCountAllMahasiswaCewe()
    {
        $query = "SELECT count(*) FROM mahasiswa WHERE `gender` = 'Perempuan' ORDER BY `name`";
        $this->db->query($query);
        return $this->db->getCount();
    }
}
