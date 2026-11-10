<h2 class="fw-bold mb-3">Input Dosen</h2>

<div class="row">
    <div class="col-md-6">

        <div class="card">
            <div class="card-body">

                <form action="dosen_proses.php?action=store" method="post">
                    <div class="mb-3">
                        <label for="dosen_nip" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="dosen_nip" name="dosen_nip" placeholder="NIP" required>
                    </div>
                    <div class="mb-3">
                        <label for="dosen_nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="dosen_nama" name="dosen_nama" placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="dosen_jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="dosen_jabatan" name="dosen_jabatan" placeholder="Jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="dosen_mengajar" class="form-label">Tempat Mengajar</label>
                        <input type="text" class="form-control" id="dosen_mengajar" name="dosen_mengajar" placeholder="Tempat Mengajar">
                    </div>
                    <button type="submit" name="store" class="btn btn-primary">Simpan</button>
                    <a href="index.php?page=dosen" class="btn btn-secondary">Batal</a>
                </form>

            </div>
        </div>

    </div>
</div>
