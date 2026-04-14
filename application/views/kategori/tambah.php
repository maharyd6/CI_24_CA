<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Tambah Kategori</h2>

<div class="card shadow">
    <div class="card-body">
<form method="post" action="<?= site_url('kategori/simpan'); ?>">
    <div class="form-group">
    <label>Nama Kategori</label><br>
    <input type="text" name="nama_kategori" class="form-control" required>
</div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('kategori');?>" class="btn btn-secondary">Kembali</a>

</form>
</div>
</div>
</div>