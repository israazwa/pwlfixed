<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<header class="fs-xl mb-2 text-center">
    <h2><b>FORM LAPORAN</b></h2>
</header>
<div class="container-md">
    <!--Modal-->
    <form action="/laporbuku/create" method="post" onsubmit="return validateEmail()" enctype="multipart/form-data">
        <div id="emailAlert" class="alert alert-danger" style="display:none;"></div>
        <script>
            function validateEmail() {
                const emailInput = document.getElementById('email').value;
                const alertDiv = document.getElementById('emailAlert');
                if (!emailInput.endsWith('@mhs.dinus.ac.id')) {
                    alertDiv.innerText = 'Email must be from the domain mhs.dinus.ac.id';
                    alertDiv.style.display = 'block';
                    return false;
                }
                alertDiv.style.display = 'none';
                return true;
            }
        </script>
        <div class="card">
            <div class="card-header">Form Laporan Buku</div>
            <div class="card-body">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nama" name="nama" required
                                placeholder="username">
                            <label for="floatingInput">username</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <select class="form-select" aria-label="Jenis Laporan" id="jenis" name="jenis" required>
                            <option value="" disabled selected>Pilih Jenis Laporan</option>
                            <option>Buku Rusak/Cacat</option>
                            <option>Buku mengandung unsur Hoax</option>
                            <option>Laporan Ketiga</option>
                        </select>
                    </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="masalah" style="height: 100px" id="masalah"
                        name="masalah" rows="3" required></textarea>
                    <label for="masalah" class="form-label">Jelaskan Permasalahannya</label>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <button type="submit" class="tombolKirim"><b>Kirim Laporan</b></button>
                </div>
            </div>
        </div>
    </form>
</div>

<style>
    .tombolKirim {
        padding-left: 43px;
        padding-right: 43px;
        padding-top: 7px;
        padding-bottom: 7px;
        background-color: #FF4500;
        color: floralwhite;
        border-radius: 6px;
        border-color: #FF4500;
        align-content: center;
        align-items: center;
        margin-bottom: 30px;
        margin-top: 9px;
    }

    .tombolKirim:hover {
        border-color: rgb(103, 28, 14);
        background-color: rgb(103, 28, 14);
        transition: transform 0.3s ease;
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
        transform: scale(0.89);
    }
</style>

<section>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Jenis</td>
                        <td>Deskripsi</td>
                        <td>Tanggal Masuk</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $key): ?>
                        <tr>
                            <td><?= $key['id']; ?></td>
                            <td><?= $key['jenis']; ?></td>
                            <td><?= $key['content']; ?></td>
                            <td><?= $key['created']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>