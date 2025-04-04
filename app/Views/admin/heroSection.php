<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Bundle JS (termasuk Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-4 mb-3">
    <h3 class="text-center">CRUD Hero Section</h3>
    <div class="container crud_hero">
        <?php if (session()->getFlashdata('success')): ?>
            <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
        </div>
    <?php elseif (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    </div>
<?php endif; ?>
<div class="container d-flex mt-3 mb-1">
    <div class="tombol"><a href="">Hero Image</a></div>
    <div class="tombolNon"><a href="/cardIcon">Card Image</a></div>
    <style>
        a {
            text-decoration: none;
            color: white;
        }

        .tombol {
            background-color: rgb(255, 77, 0);
            color: white;
            padding: 5px 15px;
            transition: all 0.3s ease;
            border-radius: 3px;
        }

        .tombolNon:hover {
            background-color: rgb(255, 78, 2);
            transform: scale(0.87);
        }

        .tombolNon {
            background-color: rgb(95, 95, 95);
            color: white;
            padding: 5px 12px;
            transition: all 0.3s ease;
            border-radius: 3px;
        }
    </style>

</div>
<form action="/uploadxfotodashhome" method="post" enctype="multipart/form-data"><?= csrf_field() ?>
    <div class="mb-2">
        <label for="formFile" class="form-label">Input Foto Hero [16:9]/aspek rasio presentasi</label>
        <input class="form-control" type="file" name="image" id="image" required>
    </div>
    <button type="submit" class="btn btn-outline-warning">Upload</button>
</form>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>No.</td>
                <td>Id</td>
                <td class="text-center">Content</td>
                <td class="text-center">CRUD</td>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 1; ?>
            <?php foreach ($data as $key): ?>
                <tr>
                    <td class="text-center"><?= $nomor; ?></td>
                    <td class="text-center"><?= $key['id']; ?></td>
                    <td><img src="<?php echo base_url($key['content']) ?>" height="72px" width="128px" alt="error-kode-4">
                    </td>
                    <td>
                        <form action="/homepic/update/<?= $key['id'] ?>" method="post" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <button class="btn btn-warning" type="submit" id="inputGroupFileAddon03">Update!</button>
                                <input type="file" class="form-control" name="image" id="image"
                                    aria-describedby="inputGroupFileAddon03" aria-label="Upload" required>
                            </div>
                        </form>
                        <form action=" /homepic/delete/<?= $key['id'] ?>" method="post">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger mt-1 mb-2"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">Delete!</button>
                        </form>
                    </td>
                </tr>
                <?php $nomor++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



</html>