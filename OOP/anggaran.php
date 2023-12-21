<?php

class anggaran
{
    private $conn;

    public function __construct($koneksi)
    {


        $this->conn = $koneksi->getConnection();
    }
    public function get_anggaran()
    {
        $result = $this->conn->query("select * from anggaran");
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $row;
    }
}
