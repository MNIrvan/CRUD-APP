<div class="container">
<?php if($this->session->flashdata('flash') ) : ?>
<div class="row mt-3">
    <div class="col-md-6">
       <div class="alert alert-success alert-dismissible fade show" role="alert">
  Data anda berhasil di perbarui.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    </div>
</div>
<?php endif; ?>

<div class="row mt-3">
    <div class="com-md-6">
        <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
</div>

<div class="div mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Daftar Mahasiswa</h1>
            <?php if( empty($mahasiswa) ) : ?>
                <div class="alert alert-danger" role="alert">
                Data Mahasiswa tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach( $mahasiswa as $mhs ) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>"  onclick="return confirm('yakin?');" type="button" class="btn btn-outline-warning float-right">hapus</a>
                    <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>" type="button" class="btn btn-outline-primary float-right">Edit</a>
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" type="button" class="btn btn-outline-info float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>