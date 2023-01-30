<?php 
    
    session_start();
    require 'function/function.php';
    
    if(isset($_POST["register"])) {
        if( registrasi($_POST) > 0 ) {
            echo "<script>
                alert('admin baru berhasil ditambahkan');
                </script>";
        } else {
            echo mysqli_error($db);
        }
    }

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="../img/logo-2.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Fonts -->
    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <!-- Chivo Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300&display=swap" rel="stylesheet">

    <!-- Tailwindcss -->
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../tailwind.config.scss">

    <!-- Style -->
    <style>
        .instagram {
            transition: .3s ease-in-out background;
        }

        .instagram:hover {
            background: linear-gradient(-150deg, #405DE6, #5B51D8, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #F77737, #FCAF45, #FFDC80);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .dropdown-show {
            display: block;
        }
    </style>
    <title>HIMTI</title>
</head>

<body>

    <!-- Navigation bar -->
    <div class="wrap">
        <header class="fixed top-0 left-0 w-full flex items-center z-10 bg-slate-50">
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="px-4">
                        <a href="#home" class="font-bold text-lg text-cyan-500 block py-6">
                            <img src="../img/logo.png" alt="" height="75" width="75">
                        </a>
                    </div>
                    <div class="flex items-center px-4">
                        <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                            <span class="hamburger-line transition duration-300 ease-in-out"></span>
                            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                        </button>

                        <nav id="nav-menu"
                            class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">

                            <ul class="block lg:flex">
                                <li class="group">
                                    <a href="#home"
                                        class="text-base text-dark-9 py-2 mx-4 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Home</a>
                                </li>
                                <li class="group">
                                    <a href="#about"
                                        class="text-base text-dark-9 py-2 mx-4 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Tentang
                                        Kami</a>
                                </li>
                                <li class="group">
                                    <a href="sub/anggota.html"
                                        class="text-base text-dark-9 py-2 mx-4 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Keanggotaan</a>
                                </li>
                                <li class="group">
                                    <a href="sub/project.html"
                                        class="text-base text-dark-9 py-2 mx-4 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Proyek
                                        </a>
                                </li>
                                <li class="group">
                                    <a href="#contact"
                                        class="text-base text-dark-9 py-2 mx-4 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Hubungi
                                        Kami</a>
                                </li>
                                <li class="group">
                                    <a href="#contact"
                                        class="text-base text-dark-9 py-2 mx-4 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Login Admin</a>
                                </li>
                                <!-- Dropdown -->
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- End of Nav -->

        <!-- Login -->

        <section class="flex flex-col justify-center items-center w-1/2 mx-auto">
            <div class="mt-32 shadow-lg border rounded-xl px-16 py-12">
                <h4 class="text-3xl">Register Admin</h4>
                <form action="" method="post" class="py-10 flex flex-col">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="p-2 rounded-xl border">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="p-2 rounded-xl border">
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="password2" id="password2" class="p-2 rounded-xl border">
                    <div class="mt-10 flex items-center justify-between gap-3">
                        <button type="submit" name="register" class="w-full p-2 rounded-lg bg-green-700 hover:bg-green-500 hover:ring focus:ring-4 text-slate-100 border transition">Register</button>
                        <a href="login.php" class="inline-block w-full p-2 text-center rounded-lg bg-blue-700 hover:bg-blue-500 hover:ring focus:ring-4 text-slate-100 border transition">Login</a>
                    </div>
                </form>
            </div>
        </section>

        <!-- End of Login -->
    <script src="../tailwind.config.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>