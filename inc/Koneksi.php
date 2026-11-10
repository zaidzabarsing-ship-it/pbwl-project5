<?php

namespace Inc;

use \PDO;
use \PDOException;

class Koneksi
{
    protected object $koneksi;

    public function __construct()
    {
        try {
            $this->koneksi = new \PDO("mysql:host=localhost;dbname=dbpbwl_projek5", "root", "");
        } catch (\PDOException $e) {
            echo "Koneksi gagal: " . $e->getMessage();
        }
    }
}
