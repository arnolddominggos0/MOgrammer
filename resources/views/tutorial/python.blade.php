<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Belajar Phyton Dari Dasar: Pengenalan Dasar Phyton</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.icon') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        @include('frontend.include.begin')
        <!-- <section> close ============================-->
        <!-- ============================================-->


        @include('frontend.include.header')

        <section class="bg-600">
            <div class="container">
                <div class="header">
                    <h1><b>
                            <font size="10">Belajar Phyton Dari Dasar: Pengenalan Dasar Phyton Untuk Pemula</font>
                        </b></h1>
                    <hr size="3px" width="100%">
                    <br />
                    <br />
                    <p>
                        <font size="6">Yoo haloo guyss... gimana nih kabarnya? udah mulai pusing belum belajar bahasa
                            pemrograman?</font>
                    </p>
                    <p>
                        <font size="6">Yap bener banget jadi kali ini kita akan belajar bahasa pemrograman ular nih!!
                        </font>
                    </p>
                    <p>
                        <font size="6">Eitss.. tapi bukan bahasa untuk bercakap dengan ular ya temen-temen, tapi
                            melainkan bahasa Phyton</font>
                    </p>
                    <br /><br />
                    <p>
                        <font size="6">Nah pada kali ini, kita akan membahas hal paling dasar dari phyton dulu nih guys,
                        </font>
                    </p>
                    <br />
                    <p>
                        <font size="6">yuk langsung aja...cusss</font>
                    </p>
                    <br /><br />

                    <h4><b>
                            <font size="6">Apa Itu Python?</font>
                        </b></h4>
                    <br />
                    <p>
                        <font size="6">Python adalah bahasa pemrograman yang banyak digunakan dalam aplikasi web,
                            pengembangan perangkat lunak, ilmu data, IoT, dan <i>machine learning</i> (ML). Developer
                            menggunakan Python karena efisien serta dapat dijalankan di berbagai platform.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Bahasa pemrograman python ini merupakan salah satu bahasa pemrograman yang
                            populer dan banyak diminati oleh kaum milenial. Hal ini dikarenakan beberapa alasan seperti
                            bahasa python yang mudah dipahami dan dipelajari.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Nah sedikit info Python merupakan bahasa pemrograman tingkat tinggi yang dibuat
                            oleh <i>Guido van Rossum</i></font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Python memang bahasa yang sederhana dibandingkan bahasa lainnya seperti Java dan
                            kawan-kawan. Tidak perlu banyak sintaks ini itu untuk membuat program <u>Hello World!</u>.
                        </font>
                    </p>
                    <br /><br />
                    <p>
                        <font size="6">Ok saatnya kita masuk ke praktik!!</font>
                    </p>
                    <p>
                        <font size="6">Let's Gooo...</font>
                    </p>

                    <br /><br />
                    <h4><b>
                            <font size="6">Tools yang harus kamu sediakan untuk belajar Python</font>
                        </b>
                    </h4>
                    <br />
                    <p>
                        <font size="6">Apa-apa saja yang kita perlukan untuk belajar python?
                        </font>
                        <br />
                        <p>
                            <font size="6"><b>1.Python,</b> Interpreter yang menerjemahkan bahasa python ke bahasa
                                mesin, sehingga program bisa dijalankan.
                            </font>
                        </p>
                        <p>
                            <font size="6">Disini kita akan menggunakan Python versi 3.10.7, atau kalian bisa
                                menginstallnya di <a
                                    href="https://www.python.org/downloads/release/python-3107/">Install Python</a>
                            </font>
                        </p>
                        <br />
                        <img src="assets/img/gallery/python1.png" width="750" height="350"
                            style="display:block; margin:auto;" />
                        <br /><br />
                        <p>
                            <font size="6"><b>2.IDE/Teks Editor,</b> akan kita gunakan untuk mengetik kode.</font>
                        </p>
                        <p>
                            <font size="6">IDE(Integereted Development Environtment) disini bebas ingin menggunakan apa
                                saja seperti <i>Pycharm</i>, <i>Pydev</i>, dll. namun disini kita akan menggunakan teks
                                editor <i>Visual Studio Code</i>. </font>
                        </p>
                        <img src="assets/img/gallery/vscode1.png" width="300" height="300"
                            style="display:block; margin:auto;" />
                        <br />

                        <br />
                        <p>
                            <font size="6">Sekarang mari kita coba memprint Hello World!,</font>
                        </p>
                        <p>
                            <font size="6">Pertama buka teks editor <i>Visual Studio Code</i> lalu buka terminal baru dan ketik <b>"python --version"</b> untuk mengecek versi python yang sudah kamu install sebelumnya.</font>
                        </p>
                        <br />
                         <br />
                        <img src="assets/img/gallery/versionpy.png" width="650" height="150"
                            style="display:block; margin:auto;" />
                        <br />
                        <p>
                            <font size="6">Lalu kemudian pada terminal ketik lagi <b>"python"</b>, ini untuk membuka mode interaktif python dimana mode ini merupakan fitur yang disediakan python sebagai tempat menulis kode secara interaktif.
                            </font>
                        </p>
                        <br />
                        <img src="assets/img/gallery/versionpy2.png" width="700" height="150"
                            style="display:block; margin:auto;" />
                        <br />
                        <p>
                            <font size="6">Setelah itu akan keluar tanda <b>>>></b>, yang artinya python siap menerima perintah.</font>
                        </p>
                        <br />
                        <p>
                            <font size="6">Sekarang mari kita tampilkan output dari print hello world dengan mengetik <b>print ("Hello World!")</b> pada terminal,dan lihat apa yang terjadi.</font>
                        </p>
                        <br />
                        <img src="assets/img/gallery/versionpy3.png" width="950" height="250"
                            style="display:block; margin:auto;" />
                        <br />
                        <p>
                            <font size="6">Dan Boom Selamat! 🎉 Kalian sudah berhasil melakukan langkah pertama dalam belajar dasar Python yaitu install dan print!!.
                            </font>
                        </p>
                        <br />







        </section>



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        @include('frontend.include.footer')
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{ asset('assets/js/theme.js')}}"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
</body>

</html>
