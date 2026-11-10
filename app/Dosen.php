<?php

namespace App;

use Inc\Koneksi;

class Dosen extends Koneksi
{
      public function index()
      {
            $sql = "SELECT * FROM tb_dosen ORDER BY dosen_id DESC";
            $stmt = $this->koneksi->prepare($sql);
            $stmt->execute();

            $data = [];

            while ($rows = $stmt->fetch()) {
                  $data[] = $rows;
            }

            return $data;
      }

      public function store()
      {
            $dosen_nip = $_POST['dosen_nip'];
            $dosen_nama = $_POST['dosen_nama'];
            $dosen_jabatan = $_POST['dosen_jabatan'];
            $dosen_mengajar = $_POST['dosen_mengajar'];

            $sql = "INSERT INTO tb_dosen SET dosen_nip=:dosen_nip, dosen_nama=:dosen_nama, dosen_jabatan=:dosen_jabatan, dosen_mengajar=:dosen_mengajar";
            $stmt = $this->koneksi->prepare($sql);

            $stmt->bindParam(":dosen_nip", $dosen_nip);
            $stmt->bindParam(":dosen_nama", $dosen_nama);
            $stmt->bindParam(":dosen_jabatan", $dosen_jabatan);
            $stmt->bindParam(":dosen_mengajar", $dosen_mengajar);

            $stmt->execute();
      }

      public function edit($id)
      {
            $sql = "SELECT * FROM tb_dosen WHERE dosen_id=:dosen_id";
            $stmt = $this->koneksi->prepare($sql);

            $stmt->bindParam(":dosen_id", $id);

            $stmt->execute();

            $row = $stmt->fetch();

            return $row;
      }

      public function update()
      {
            $dosen_id = $_POST['dosen_id'];
            $dosen_nip = $_POST['dosen_nip'];
            $dosen_nama = $_POST['dosen_nama'];
            $dosen_jabatan = $_POST['dosen_jabatan'];
            $dosen_mengajar = $_POST['dosen_mengajar'];

            $sql = "UPDATE tb_dosen SET dosen_nip=:dosen_nip, dosen_nama=:dosen_nama, dosen_jabatan=:dosen_jabatan, dosen_mengajar=:dosen_mengajar WHERE dosen_id=:dosen_id";
            $stmt = $this->koneksi->prepare($sql);

            $stmt->bindParam(":dosen_nip", $dosen_nip);
            $stmt->bindParam(":dosen_nama", $dosen_nama);
            $stmt->bindParam(":dosen_jabatan", $dosen_jabatan);
            $stmt->bindParam(":dosen_mengajar", $dosen_mengajar);
            $stmt->bindParam(":dosen_id", $dosen_id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_dosen WHERE dosen_id=:dosen_id";
            $stmt = $this->koneksi->prepare($sql);

            $stmt->bindParam(":dosen_id", $id);

            $stmt->execute();
      }
}
