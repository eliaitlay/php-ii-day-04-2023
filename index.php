<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus CaCode</title>

    <!-- Talwind css - CND -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">

    <!-- HEADER STAR -->
    <header class="border-2 m-5 p-5 shadow-md bg-white">

    <h1 class="text-3xl font-bold text-gray-700 mb-3">Pendaftaran Kursus SaCode</h1>
    <p class="text-xs text-gray-500">Silakan lengkapi formulir dengan baik dan benar.</p>
    </header>

    <!-- HEADER END -->

    <!-- MAIN CONTENT -->
    <section class="border-2 m-5 p-5 shadow-md bg-white">

    <?php
    // integrasi form tambah
    include ('form-tambah.php')
    ?>

    
    </section>
    <!-- MAIN CONTENT AND-->

    <!-- FOOTER STAR -->
    <footer class="border-2 m-5 p-5 shadow-md">
        <p class="text-gray-500 text-xs">copyright &copy 2023, designed by <b>Elia Itlay</b></p>
    </footer>
        <!-- FOOTER STAR AND-->

        

    
</body>
</html>