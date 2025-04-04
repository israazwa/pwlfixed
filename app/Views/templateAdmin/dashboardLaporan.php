<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container mb-5">
            <div class="header text-center">
                <h3><b>Controller Laporan</b></h3>
            </div>
        </div>
    </section>
    <?php
    $password = 'cinajawa';
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); ?>
    <?= $hashedPassword; ?>
    <section>
        <ul class="nav nav-underline m-3">
            <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="#">BUKU</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">FASILITAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">ComingSoon</a>
            </li>
        </ul>
    </section>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>