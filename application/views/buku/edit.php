<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Edit Data Buku</h2>

    <div class="card shadow">
        <div class="card-body">
            <form method="post" action="<?= site_url('buku/update/'.$buku->id_buku); ?>">
                
                <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" value="<?= $buku->kode_buku; ?>" required>
                </div>

                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" value="<?= $buku->judul_buku; ?>" required>
                </div>

                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="<?= $buku->penulis; ?>" required>
                </div>

                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="<?= $buku->penerbit; ?>" required>
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" name="tahun" class="form-control" value="<?= $buku->tahun; ?>" required>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach($kategori as $k) : ?>
                            <option value="<?= $k->id ?>" <?= ($k->id == $buku->id_kategori) ? 'selected' : '' ?>>
                                <?= $k->nama_kategori ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" value="<?= $buku->stok; ?>" required>
                </div>

                <div class="form-group">
                    <label>Lokasi Rak</label>
                    <input type="text" name="lokasi_rak" class="form-control" value="<?= $buku->lokasi_rak; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= site_url('buku');?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>