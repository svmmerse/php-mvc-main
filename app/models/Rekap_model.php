<?php

class Rekap_model
{
    private $table = 'rekap';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRekap()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getRekapById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_rekap= :id_rekap');
        $this->db->bind('id_rekap', $id);
        return $this->db->single();
    }

    public function tambahDataRekap($data)
    {
        $query = "INSERT INTO rekap
                    VALUES
                  (null, :nm_mhs, :nrp, :nm_matkul, :kd_matkul)";

        $this->db->query($query);
        $this->db->bind('nm_mhs', $data['nm_mhs']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('nm_matkul', $data['nm_matkul']);
        $this->db->bind('kd_matkul', $data['kd_matkul']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataRekap($id)
    {
        $query = "DELETE FROM rekap WHERE id_rekap = :id_rekap";

        $this->db->query($query);
        $this->db->bind('id_rekap', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataRekap($data)
    {
        $query = "UPDATE rekap SET
                    nm_mhs = :nm_mhs,
                    nrp = :nrp,
                   nm_matkul= :nm_matkul,
                   kd_matkul= :kd_matkul,
                  WHERE id_rekap = :id_rekap";

        $this->db->query($query);
        $this->db->bind('id_rekap', $data['id_rekap']);
        $this->db->bind('nm_mhs', $data['nm_mhs']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('nm_matkul', $data['nm_matkul']);
        $this->db->bind('kd_matkul', $data['kd_matkul']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataRekap()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM rekap WHERE nm_mhs LIKE :keyword OR nrp LIKE :keyword OR nm_matkul LIKE :keyword OR kd_matkul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
