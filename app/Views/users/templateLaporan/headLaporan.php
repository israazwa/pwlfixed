<!DOCTYPE html>
<html lang="en">



<!--BELUM ATAU TIDAK TERPAKAI-->
<!--



<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .full-nav {
            display: flex;
            justify-content: flex-start;
        }

        .dropdown-nav {
            display: none;
        }

        @media (max-width: 768px) {
            .full-nav {
                display: none;
            }

            .dropdown-nav {
                display: block;
            }
        }

        .btnn {
            padding: 6px 12px;
            background-color: rgb(255, 89, 0);
            color: white;
            border-color: white;
            text-decoration: none;
        }

        .baso {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container mb-3">
        <nav class="container mt-3 d-flex">

            <div class="full-nav d-none d-md-flex">
                <a href="#" class="btnn">Home</a>
                <a href="#" class="btnn">About</a>
                <a href="#" class="btnn">Services</a>
                <a href="#" class="btnn">Contact</a>
            </div>

            <!--alp.js-->
<div class="col-4">
    <div class="dropdown-nav d-md-none" x-data="{ open: false }">
        <button class="btnn w-100" @click="open = !open">Menu</button>
        <div x-show="open" class="mt-2">
            <ul class="list-group ">
                <li class="list-group-item"><a href="#">Home</a></li>
                <li class="list-group-item"><a href="#">About</a></li>
                <li class="list-group-item"><a href="#">Services</a></li>
                <li class="list-group-item"><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-8 mx-3">
    <div class="content">
        <h6 class="text-center">Halaman <?= $title; ?></h6>
    </div>
</div>
</nav>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.0/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>