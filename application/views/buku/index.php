<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Data Buku</h2>

    <a href="<?= site_url('buku/tambah'); ?>" class="btn btn-primary mb-3">Tambah Buku</a>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($buku as $b): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b->kode_buku; ?></td>
                            <td><?= $b->judul_buku; ?></td>
                            <td><?= $b->penulis; ?></td>
                            <td><?= $b->nama_kategori; ?></td>
                            <td><?= $b->stok; ?></td>
                            <td>
                                <a href="<?= site_url('buku/edit/'.$b->id_buku); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= site_url('buku/hapus/'.$b->id_buku); ?>" 
                                   onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>