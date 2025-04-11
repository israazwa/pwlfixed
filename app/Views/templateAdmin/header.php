<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

<body>
    <nav class="navbar sticky-bottom navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-end" href="/" style="gap: 5px;">
                <img src="<?= base_url('logo.png'); ?>" alt="Logo" width="45" height="45" class="d-inline-block">
                <div>
                    <b>Lapor <span>Bu</span></b>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                            href="<?= base_url('/adminDjawaateeth'); ?>">Controller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/adminlprr'); ?>">DaftarLaporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/admin/pengumuman'); ?>">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            <button action="submit" class="logout">LogOut!</button>
                        </form>
                        <style>
                            .logout {
                                padding: 4px 12px;
                                background: rgb(255, 115, 0);
                                border-radius: 4px;
                                border-color: darkorange;
                                color: white;
                            }

                            .logout:hover {
                                background-color: rgb(157, 60, 0);
                                transition: all 0.3s ease;
                                transform: scale(0.89);
                            }
                        </style>
                    </li>
                </ul>
            </div>
        </div>
    </nav>