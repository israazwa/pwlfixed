<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jdul">
            <h3 class="text-center mt-5">CURD PENGUMUMAN</h3>
            <div class="info">
                <p class="text text-center bg-danger text-white">HAPUS PENGUMUMAN LAMA SEBELUM UPLOAD YANG BARU!</p>
            </div>
        </div>
        <form action="/admin/pengumuman/cr" enctype="multipart/form-data" method="post">
            <div class="content">

                <div class="inputPengumuman mx-1">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Isi Pengumuman</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="content"
                            name="content" required></textarea>
                    </div>
                </div>

                <div class="inputpj my-2 mx-1">
                    <label for="exampleFormControlInput1" class="form-label">Penanggung Jawab</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Penanggung Jawab"
                        id="pj" name="pj" required>
                </div>

                <div class="inputcp my-2 mx-1">
                    <label for="exampleFormControlInput1" class="form-label">ContactPerson</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Hp" id="cp"
                        name="cp" required>
                </div>

                <div class="linkPengumuman mx-1">
                    <label for="exampleFormControlInput1" class="form-label">Link Surat Resmi</label>
                    <input type="link" class="form-control" id="exampleFormControlInput1" placeholder="Link Gdrive"
                        id="link" name="link" required>
                </div>

                <div class="tgl mt-3 mx-1">
                    <input type="date" class="date-input" id="tgl" name="tgl" required>
                    <style>
                        .date-input {
                            border: 2px solid #4caf50;
                            border-radius: 10px;
                            padding: 10px 15px;
                            font-size: 16px;
                            outline: none;
                            background-color: #ffffff;
                            color: #333;
                            transition: all 0.3s ease-in-out;
                        }

                        .date-input:focus {
                            border-color: #66bb6a;
                            box-shadow: 0 0 8px rgba(102, 187, 106, 0.5);
                        }

                        .date-input::-webkit-calendar-picker-indicator {
                            filter: invert(48%) sepia(9%) saturate(748%) hue-rotate(88deg) brightness(92%) contrast(87%);
                            cursor: pointer;
                        }
                    </style>
                </div>
                <div class="keteranganUpload">
                </div>
                <div class="tombol mt-3">
                    <button type="submit " class="tombolcrud mx-3">
                        <b>Submit</b>
                    </button>
                    <style>
                        .tombolcrud {
                            background: rgb(245, 69, 0);
                            padding: 5px 14px;
                            border: none;
                            border-radius: 5px;
                            color: white;
                        }

                        .tombolcrud:hover {
                            background: rgb(146, 41, 0);
                            transition: all 0.3s ease;
                            transform: scale(0.86);
                        }
                    </style>
                </div>
            </div>
        </form>
    </div>

    <section>
        <div class="container mt-4">
            <div class="tesAktif">
                <h4>Live Preview</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Content</th>
                            <th>Tanggal</th>
                            <th>Penanggung Jawab (PJ)</th>
                            <th>Contact Person (CP)</th>
                            <th>Link</th>
                            <th>Created</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengumuman as $key): ?>
                            <tr>
                                <td><?= $key['content']; ?></td>
                                <td><?= $key['tgl']; ?></td>
                                <td><?= $key['pj']; ?></td>
                                <td><?= $key['cp']; ?></td>
                                <td><?= $key['link']; ?></td>
                                <td><?= $key['created']; ?></td>
                                <td>
                                    <form action="/admin/pengumuman/dl/<?= $key['id'] ?>" method="post">
                                        <button type="submit" class="btn btn-danger">Drop</button>
                                    </form>
                                </td>
                            </tr><?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>





    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>