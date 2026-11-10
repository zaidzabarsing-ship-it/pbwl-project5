<?php

require_once "inc/Koneksi.php";
require_once "app/Dosen.php";

$dosen = new App\Dosen();
$rows = $dosen->index();

?>

<div class="row">
    <div class="col-md-12">

        <h2 class="fw-bold mb-3">Dosen</h2>

        <a href="index.php?page=dosen_input" class="btn btn-primary mb-2 mb-3">Input Dosen Baru</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Tempat Mengajar</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($row['dosen_nip']); ?></td>
                        <td><?php echo htmlspecialchars($row['dosen_nama']); ?></td>
                        <td><?php echo htmlspecialchars($row['dosen_jabatan'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($row['dosen_mengajar'] ?? ''); ?></td>
                        <td>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="index.php?page=dosen_edit&id=<?php echo (int) $row['dosen_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <form action="dosen_proses.php?action=delete" method="post" onsubmit="return confirm('Yakin ingin menghapus data?')">
                                    <input type="hidden" name="dosen_id" value="<?php echo (int) $row['dosen_id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</div>
