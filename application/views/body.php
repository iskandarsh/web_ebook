<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body class = "bg-body">
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow" style="z-index: 100;">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>E-BOOK GOTONG ROYONG</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class=" btn btn-danger px-3" href="<?php echo base_url(); ?>login/logout" style="color: white;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



    <?= $isi_conten ?>

    <footer class=" bg-light shadow">
        <div class="container">
            <div class="row">
                <div class="col text-center" style="margin-top: 20px;">
                    <img src="<?= base_url().'assets/images/foot-1.png'; ?>" alt="Logo Kiri" style="max-width: 100px;">
                </div>
                <div class="col text-center" style="margin-top: 20px;">
                    © 2024 YourWebsite.com
                </div>
                <div class="col text-center">
                    <img src="<?= base_url().'assets/images/foot-2.png'; ?>" alt="Logo Kiri" style="max-width: 100px;">
                </div>
            </div>
        </div>
    </footer>




    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
