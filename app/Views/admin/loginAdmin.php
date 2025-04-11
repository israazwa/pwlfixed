<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
</head>
<?= $this->include('templateUser/header'); ?>
<div class=" container d-flex item" style=" display: flex; justify-content: center; align-items: center;">
    <style>
        .item {
            height: 100vh;
        }
    </style>
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="backdrop d-flex mx-5 my-5" style="display: flex; justify-content: center; align-items: center;">
                <img src="<?= base_url('logo.png'); ?>" alt="sdd" height="250px" width="250px">
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="container mx-5 ">
                <div class="container mt-5">
                    <h2 class="text-center mb-4">Login</h2>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= base_url('/logincek'); ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <button type="submit" class="tombol">Login</button>
                        <style>
                            .tombol {
                                background-color: rgb(255, 89, 0);
                                color: white;
                                padding: 4px 19px;
                                border-radius: 3px;
                                border-color: rgb(255, 89, 0);
                            }
                        </style>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




</html>