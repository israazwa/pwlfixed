<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
</head>
<?= $this->include('templateUser/header'); ?>


<div class="container vh-100 d-flex align-items-center justify-content-center">
    <style>
        .item {
            height: 100vh;
        }

        .tombol {
            background-color: rgb(255, 89, 0);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease;
            transition: all 0.3s ease;
        }

        .tombol:hover {
            background-color: rgb(160, 56, 0);
            transform: scale(0.86);
        }

        img {
            border-radius: 10px;
        }
    </style>
    <div class="row w-100 mx-2">
        <div class="col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
            <div class="backdrop">
                <img src="<?= base_url('logo.png'); ?>" alt="Logo" class="img-fluid"
                    style="max-width: 100%; height: auto;">
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="container">
                <div class="mt-5">
                    <h2 class="text-center mb-4">Login</h2>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= base_url('/logincek'); ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control"
                                placeholder="Masukkan Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Masukkan Password" required>
                        </div>
                        <button type="submit" class="tombol w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




</html>