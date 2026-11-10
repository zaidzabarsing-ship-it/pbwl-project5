<?php

require_once "inc/Koneksi.php";
require_once "app/Matakuliah.php";

$matkul = new App\Matakuliah();

$id = $_GET['id'] ?? '';

$row = $matkul->edit($id);

?>

<h2 class="fw-bold mb-3">Edit Matakuliah</h2>
<div class="row">
    <div class="col-md-6">

        <div class="card">
            <div class="card-body">

                <?php if (!$row) { ?>
                    <div class="alert alert-warning">Data matakuliah tidak ditemukan.</div>
                    <a href="index.php?page=matkul" class="btn btn-secondary">Kembali</a>
                <?php } else { ?>
                    <form action="matkul_proses.php?action=update" method="post">
                        <input type="hidden" name="matkul_id" value="<?php echo (int) $row['matkul_id']; ?>">
                        <div class="mb-3">
                            <label for="matkul_kode" class="form-label">Kode Matakuliah</label>
                            <input type="text" value="<?php echo htmlspecialchars($row['matkul_kode']); ?>" class="form-control" id="matkul_kode" name="matkul_kode" placeholder="Kode" required>
                        </div>
                        <div class="mb-3">
                            <label for="matkul_nama" class="form-label">Nama Matakuliah</label>
                            <input type="text" value="<?php echo htmlspecialchars($row['matkul_nama']); ?>" class="form-control" id="matkul_nama" name="matkul_nama" placeholder="Nama Matakuliah" required>
                        </div>
                        <div class="mb-3">
                            <label for="matkul_sks" class="form-label">SKS</label>
                            <input type="number" value="<?php echo (int) $row['matkul_sks']; ?>" class="form-control" id="matkul_sks" name="matkul_sks" min="1" max="10" required>
                        </div>
                        <div class="mb-3">
                            <label for="matkul_semester" class="form-label">Semester</label>
                            <input type="number" value="<?php echo (int) $row['matkul_semester']; ?>" class="form-control" id="matkul_semester" name="matkul_semester" min="1" max="14" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                        <a href="index.php?page=matkul" class="btn btn-secondary">Batal</a>
                    </form>
                <?php } ?>

            </div>
        </div>

    </div>
</div>
