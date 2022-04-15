<?php

class Matkul_model
{
    private $table = 'matkul';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMatkul()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMatkulById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_matkul= :id_matkul');
        $this->db->bind('id_matkul', $id);
        return $this->db->single();
    }

    public function tambahDataMatkul($data)
    {
        $query = "INSERT INTO matkul
                    VALUES
                  (null, :nama_matkul, :kode_matkul, :ruangan)";

        $this->db->query($query);
        $this->db->bind('nama_matkul', $data['nama_matkul']);
        $this->db->bind('kode_matkul', $data['kode_matkul']);
        $this->db->bind('ruangan', $data['ruangan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMatkul($id)
    {
        $query = "DELETE FROM matkul WHERE id_matkul = :id_matkul";

        $this->db->query($query);
        $this->db->bind('id_matkul', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMatkul($data)
    {
        $query = "UPDATE matkul SET
                    nama_matkul = :nama_matkul,
                    kode_matkul = :kode_matkul,
                    ruangan = :ruangan
                  WHERE id_matkul = :id_matkul";

        $this->db->query($query);
        $this->db->bind('id_matkul', $data['id_matkul']);
        $this->db->bind('nama_matkul', $data['nama_matkul']);
        $this->db->bind('kode_matkul', $data['kode_matkul']);
        $this->db->bind('ruangan', $data['ruangan']);


        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataMatkul()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM matkul WHERE nama_matkul LIKE :keyword OR kode_matkul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
