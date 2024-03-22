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

        a {
            text-decoration: none;
        }

        .container-utama{
            margin-top: 6rem;
            margin-bottom: 7rem;
        }

        .box-title{
            height:70px; 
            text-align: center; 
            font-size:x-large; 
            font-weight:bold;
            z-index: 1;
            box-shadow: -1.17px 2.33px 4.1px rgba(0, 0, 0, 0.2);
            background-color: #FFCD6B;
        }

        .box-body{
            padding: 30px 10px;
            background-color: #FFE0A4;
        }

        .content-box{
            text-align: left; 
        }

        .btn{
            width: 9rem;
            background-color: #F36767;
            border-color: #F36767;
        }

        
        .page {
            display: none;
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
<header >
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" style="z-index: 100;">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>E-BOOK KEBERAGAMAN SOSIAL DAN BUDAYA</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class=" btn btn-danger" href="<?php echo base_url(); ?>login/logout" style="color: white;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


    <?= $isi_conten ?>

    <footer class=" bg-light shadow fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col text-center" style="margin-top: 20px;">
                    <img src="<?= base_url().'assets/images/foot-1.png'; ?>" alt="Logo Kiri" style="max-width: 100px;">
                </div>
                <div class="col text-center" style="margin-top: 20px;">
                    © 2024 PGSD UMM
                </div>
                <div class="col text-center">
                    <img src="<?= base_url().'assets/images/foot-2.png'; ?>" alt="Logo Kiri" style="max-width: 100px;">
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
             let currentPage = 1;
            const totalPages = $('.paragraphs .page').length;

            // Show initial page
            showPage(currentPage);

            // Show next page
            $('.next-btn').on('click', function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Show previous page
            $('.prev-btn').on('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            // Function to show specific page
            function showPage(pageNumber) {
                const pages = $('.paragraphs .page');
                pages.hide();
                $('.paragraphs .page-' + pageNumber).show();
                
                // Hide/show next and previous buttons based on current page
                if (pageNumber === 1) {
                    $('.prev-btn').hide();
                } else {
                    $('.prev-btn').show();
                }
                
                if (pageNumber === totalPages) {
                    $('.next-btn').hide();
                } else {
                    $('.next-btn').show();
                }
            }
        });
    </script>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
