<style>
    /* Style untuk image */
    .corner-image {
        width: 100px; /* ukuran gambar */
        position: fixed; /* posisi tetap */
        bottom: 0; /* jarak dari bawah */
        right: 0; /* jarak dari kanan */
        margin: 20px; /* margin untuk memberi ruang */
    }
</style>

<main class="container mt-5">
    
<a class="btn btn-outline-secondary px-3" href="<?php echo base_url(); ?>home" style="color: white; background-color: #6c757d; border-color: #6c757d;">Back</a>


    <center>
        <h1><b> GAME</b></h1>

        <iframe src="https://wordsearchlabs.com/embed/532172" frameborder="0" width="400" height="500"></iframe>
    </center>
    <img src="<?php echo base_url(); ?>" alt="Corner Image" class="corner-image">
</main>
