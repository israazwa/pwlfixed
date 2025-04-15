<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>



<body>
    <div class="container mt-1">
        <h2 class="mb-4">Laporan Fasilitas</h2>

        <!-- Notifikasi Flash -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <div class="table-responsive mb-4">
            <table class="table table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis</th>
                        <th>Masalah</th>
                        <th>Content</th>
                        <th>Foto</th>
                        <th>Tanggal Upload</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $index => $record): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $record['nama'] ?></td>
                                <td><?= $record['email'] ?></td>
                                <td><?= $record['jenis'] ?></td>
                                <td><?= $record['masalah'] ?></td>
                                <td><?= $record['content'] ?></td>
                                <td>
                                    <?php if (!empty($record['foto'])): ?>
                                        <img src="<?= base_url('laporan/fasilitas/' . basename($record['foto'])) ?>"
                                            alt="Foto Laporan" width="100">
                                    <?php else: ?>
                                        Tidak ada foto
                                    <?php endif; ?>
                                </td>
                                <td><?= $record['created'] ?></td>
                                <td>
                                    <a href="/adminlprr/update/<?= $record['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="/adminlprr/delete/<?= $record['id'] ?>" method="post" style="display:inline;">
                                        <?= csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?');">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <div class="mb-3">
                                        <label for="buku" class="form-label">Content</label>
                                        <textarea class="form-control" id="buku" name="buku" rows="3" required></textarea>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9">Tidak ada data.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
</body>

</html>