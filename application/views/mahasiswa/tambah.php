<div class="container">
<div class="row mt-3">
    <div class="col-md-6">

        <div class="card">
        <div class="card-header">
            <h5>From Tambah Data Mahasiswa</h5> 
        </div>
        <div class="card-body">
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
                <small class="form-text text-danger"><?= form_error('nama') ?></small>
            </div>
            <div class="form-group mt-2">
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" class="form-control" id="nrp">
                <small class="form-text text-danger"><?= form_error('nrp') ?></small>
            </div>
            <div class="form-group mt-2">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email">
                <small class="form-text text-danger"><?= form_error('email') ?></small>
            </div>
            <div class="form-group mt-2">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Rekayasa perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Kimia Industri">Kimia Industri</option>
                    <option value="Perkantoran">Perkantoran</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Akuntansi">Akuntansi</option>
                </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-outline-primary mt-3 float-right">Tambah Data</button>
            </form>
        </div>
        </div>
    </div>
</div>
</div>