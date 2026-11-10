<?php

require_once "inc/Koneksi.php";
require_once "app/Dosen.php";

$dosen = new App\Dosen();

$id = $_GET['id'] ?? '';

$row = $dosen->edit($id);

?>

<h2 class="fw-bold mb-3">Edit Dosen</h2>
<div class="row">
    <div class="col-md-6">

        <div class="card">
            <div class="card-body">

                <?php if (!$row) { ?>
                    <div class="alert alert-warning">Data dosen tidak ditemukan.</div>
                    <a href="index.php?page=dosen" class="btn btn-secondary">Kembali</a>
                <?php } else { ?>
                    <form action="dosen_proses.php?action=update" method="post">
                        <input type="hidden" name="dosen_id" value="<?php echo (int) $row['dosen_id']; ?>">
                        <div class="mb-3">
                            <label for="dosen_nip" class="form-label">NIP</label>
                            <input type="text" value="<?php echo htmlspecialchars($row['dosen_nip']); ?>" class="form-control" id="dosen_nip" name="dosen_nip" placeholder="NIP" required>
                        </div>
                        <div class="mb-3">
                            <label for="dosen_nama" class="form-label">Nama</label>
                            <input type="text" value="<?php echo htmlspecialchars($row['dosen_nama']); ?>" class="form-control" id="dosen_nama" name="dosen_nama" placeholder="Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="dosen_jabatan" class="form-label">Jabatan</label>
                            <input type="text" value="<?php echo htmlspecialchars($row['dosen_jabatan'] ?? ''); ?>" class="form-control" id="dosen_jabatan" name="dosen_jabatan" placeholder="Jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="dosen_mengajar" class="form-label">Tempat Mengajar</label>
                            <input type="text" value="<?php echo htmlspecialchars($row['dosen_mengajar'] ?? ''); ?>" class="form-control" id="dosen_mengajar" name="dosen_mengajar" placeholder="Tempat Mengajar">
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                        <a href="index.php?page=dosen" class="btn btn-secondary">Batal</a>
                    </form>
                <?php } ?>

            </div>
        </div>

    </div>
</div>
