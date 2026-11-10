<h2 class="fw-bold mb-3">Input Matakuliah</h2>

<div class="row">
    <div class="col-md-6">

        <div class="card">
            <div class="card-body">

                <form action="matkul_proses.php?action=store" method="post">
                    <div class="mb-3">
                        <label for="matkul_kode" class="form-label">Kode Matakuliah</label>
                        <input type="text" class="form-control" id="matkul_kode" name="matkul_kode" placeholder="Kode" required>
                    </div>
                    <div class="mb-3">
                        <label for="matkul_nama" class="form-label">Nama Matakuliah</label>
                        <input type="text" class="form-control" id="matkul_nama" name="matkul_nama" placeholder="Nama Matakuliah" required>
                    </div>
                    <div class="mb-3">
                        <label for="matkul_sks" class="form-label">SKS</label>
                        <input type="number" class="form-control" id="matkul_sks" name="matkul_sks" min="1" max="10" placeholder="SKS" required>
                    </div>
                    <div class="mb-3">
                        <label for="matkul_semester" class="form-label">Semester</label>
                        <input type="number" class="form-control" id="matkul_semester" name="matkul_semester" min="1" max="14" placeholder="Semester" required>
                    </div>
                    <button type="submit" name="store" class="btn btn-primary">Simpan</button>
                    <a href="index.php?page=matkul" class="btn btn-secondary">Batal</a>
                </form>

            </div>
        </div>

    </div>
</div>
