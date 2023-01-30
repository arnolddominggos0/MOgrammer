<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Tutorial CSS: Pengenalan CSS Dasar Bagi Pemula</title>


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
                            <font size="10">Tutorial CSS: Pengenalan CSS Dasar Bagi Pemula</font>
                        </b></h1>
                    <hr size="3px" width="100%">
                    <br />
                    <br />
                    <p>
                        <font size="6">Setelah belajar HTML, bahasa berikutnya yang harus kita pelajari agar menjadi web
                            developer adalah CSS.</font>
                    </p>
                    <p>
                        <font size="6">Pemahaman tentang CSS sangat penting, jika kamu ingin fokus pada front-end web
                            development.</font>
                    </p>
                    <br />
                    <br />
                    <p>
                        <font size="6">Tugas front-end developer biasanya akan membuat halaman web berdasarkan desain
                            dari desainer.</font>
                    </p>
                    <h4><b>
                            <font size="6">Apa itu CSS?</font>
                        </b></h4>
                    <br />
                    <p>
                        <font size="6">CSS (Cascade Style Sheet) adalah sebuah bahasa untuk mengatur tampilan web
                            sehingga terlihat lebih menarik dan indah.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Dengan CSS, kita dapat mengatur layout (tata letak), warna, font, garis,
                            background, animasi, dan lain-lain.</font>
                    </p>
                    <img src="assets/img/gallery/aturCSS.jpg" width="950" height="450"
                        style="display:block; margin:auto;" />
                    <br />
                    <p>
                        <font size="6">Dengan baris kode CSS kita bisa mengatur tata letak gambar seperti berikut:
                        </font>
                    </p>
                    <img src="assets/img/gallery/atur3CSS.jpg" width="950" height="450"
                        style="display:block; margin:auto;" />
                    <br />
                    <p>
                        <font size="6">Tanpa CSS, website Petani Kode terlihat jelek dan tidak tertata. Sedangkan jika
                            menggunakan CSS, tampilannya jadi lebih bagus dan rapi.</font>
                    </p>


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
