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
    <title>HIMTI | Keanggotaan</title>
</head>

<body>

    <!-- Navigation bar -->
    <div class="wrap">
        <header class="bg-slate-50 top-0 left-0 w-full flex items-center z-10 fixed">
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
                                    <a href="../index.html#home"
                                        class="text-base text-dark-9 py-2 mx-8 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Home</a>
                                </li>
                                <li class="group">
                                    <a href="../index.html#about"
                                        class="text-base text-dark-9 py-2 mx-8 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Tentang
                                        Kami</a>
                                </li>
                                <li class="group">
                                    <a href="anggota.html"
                                        class="text-base text-dark-9 py-2 mx-8 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Keanggotaan</a>
                                </li>
                                <li class="group">
                                    <a href="#"
                                        class="text-base text-dark-9 py-2 mx-8 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Proyek
                                        Kami</a>
                                </li>
                                <li class="group">
                                    <a href="../index.html#contact"
                                        class="text-base text-dark-9 py-2 mx-8 flex font-poppins font-semibold group-hover:text-slate-300 transition duration-150">Hubungi
                                        Kami</a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </header>


        <!-- End of Nav -->

        <!-- Project -->

        <section class="mt-48 md:pt-16" id="project">

            <h4 class="text-4xl text-center md:text-6xl font-bold uppercase"
                style="font-family: 'Chivo Mono', monospace;">
                Proyek Kami</h4>

            <div class="flex flex-col md:flex-row py-28 px-5">
                <div
                    class="w-full p-0 lg:w-1/2 xl:w-1/3 md:m-6 my-4 overflow-hidden shadow-lg rounded-xl border bg-slate-200">
                    <img src="img/pic2.jpg" alt="" class="w-full">
                    <div class="p-3">
                        <h4 class="pt-6 text-2xl font-poppins">Project 1</h4>
                        <p class="pt-6 font-poppins">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident
                            obcaecati
                            atque labore, natus non
                            sunt officiis illum. Doloremque tempora dicta autem. Iste voluptatibus, laboriosam sunt
                            sequi
                            dolorum quae impedit temporibus!</p>
                        <a href="#"
                            class="block p-3 my-3 text-center bg-[#071530] text-slate-100 rounded-xl transition duration-150 hover:bg-slate-100 hover:text-[#071530] hover:ring hover:ring-[#071530]">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                <div
                    class="w-full p-0 lg:w-1/2 xl:w-1/3 md:m-6 my-4 overflow-hidden shadow-lg rounded-xl border bg-slate-200">
                    <img src="img/pic1.gif" alt="" class="w-full">
                    <div class="p-3">
                        <h4 class="pt-6 text-2xl font-poppins">Project 2</h4>
                        <p class="pt-6 font-poppins">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident
                            obcaecati
                            atque labore, natus non
                            sunt officiis illum. Doloremque tempora dicta autem. Iste voluptatibus, laboriosam sunt
                            sequi
                            dolorum quae impedit temporibus!</p>
                        <a href="#"
                            class="block p-3 my-3 text-center bg-[#071530] text-slate-100 rounded-xl transition duration-150 hover:bg-slate-100 hover:text-[#071530] hover:ring hover:ring-[#071530]">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                <div
                    class="w-full p-0 lg:w-1/2 xl:w-1/3 md:m-6 my-4 overflow-hidden shadow-lg rounded-xl border bg-slate-200">
                    <img src="img/pic3.jpg" alt="" class="w-full">
                    <div class="p-3">
                        <h4 class="pt-6 text-2xl font-poppins">Project 3</h4>
                        <p class="pt-6 font-poppins">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident
                            obcaecati
                            atque labore, natus non
                            sunt officiis illum. Doloremque tempora dicta autem. Iste voluptatibus, laboriosam sunt
                            sequi
                            dolorum quae impedit temporibus!</p>
                        <a href="#"
                            class="block p-3 my-3 text-center bg-[#071530] text-slate-100 rounded-xl transition duration-150 hover:bg-slate-100 hover:text-[#071530] hover:ring hover:ring-[#071530]">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>

        </section>

        <!-- End of Project -->

        <!-- Footer -->
        <section id="footer" class="pt-10">
            <div class="footer">
                <div class="footer-1 bg-[#071530] flex flex-col md:flex-row justify-between items-center">
                    <div class="footer-maps overflow-hidden p-5 md:w-1/2">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0"
                                    scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=400&amp;height=250&amp;hl=en&amp;q=IBM bekasi kampus 2&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                    href="https://www.gachacute.com/">Download</a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 250px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 100%;
                                    height: 250px;
                                }

                                .gmap_iframe {
                                    height: 250px !important;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="footer-tribute p-5 text-center md:w-1/2">
                        <p class="text-slate-100 text-lg">This website is tribute for</p>
                        <img src="img/logo-2.png" width="250" class="block mx-auto">
                    </div>
                </div>
                <div
                    class="footer-2 bg-[#1F2C44] flex flex-col md:flex-row md:justify-between items-center text-slate-100">
                    <div class="footer-cp py-3 px-10"><span>&copy;</span>Copyright 2022 HIMTI IBMB. All Right Reserved
                    </div>
                    <div class="footer-creator py-3 px-10">Made with <i class="bi bi-heart-fill text-pink-500"></i> by
                        <a href="#">EX4CT</a>
                    </div>
                </div>
            </div>
        </section>

        <script src="../tailwind.config.js"></script>
        <script src="../js/app.js"></script>
</body>

</html>