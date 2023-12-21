<?php

class barang
{
    private $conn;

    public function __construct($koneksi)
    {




        $this->conn = $koneksi->getConnection();
    }
    public function barang()
    {
        $result = $this->conn->query("select * from anggaran");
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $row;
    }

    public function deleteBarang()
    {
        $result = $this->conn->query("select * from anggaran");
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo var_dump($row);
    }

    public function tambahAnggaran($data)
    {
        $result = $this->conn->query("INSERT INTO anggaran (asal, tahun_penerimaan) VALUES ('" . $data['asal'] . "','" . $data['tahun_penerimaan'] . "')");
        return $result;
    }
    public function get_anggaran()
    {
        $result = $this->conn->query("select * from anggaran");
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $row;
    }
}
