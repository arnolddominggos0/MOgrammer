<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Pemrograman Javascript: Langkah Awal Dalam Belajar Javascript</title>


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
                            <font size="10">Pemrograman Javascript: Langkah Awal Dalam Belajar Javascript</font>
                        </b></h1>
                    <hr size="3px" width="100%">
                    <br />
                    <br />
                    <p>
                        <font size="6">Javascript adalah bahasa pemrograman yang wajib kamu pelajari jika ingin
                            mendalami dunia web development.

                            Saat ini javascript tidak hanya digunakan di sisi client (browser) saja. Javascript juga
                            digunakan pada server, console, program desktop, mobile, IoT, game, dan lain-lain.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Hal ini membuat javascript semakin populer dan menjadi bahasa yang paling banyak
                            digunakan beberapa tahun belakangan hingga saat ini.</font>
                    </p><br />
                    <h4><b>
                            <font size="6">Apa itu javascript?</font>
                        </b></h4>
                    <br />
                    <p>
                        <font size="6">Javascript adalah bahasa pemrograman yang awalnya dirancang untuk berjalan di
                            atas browser.

                            Namun, seiring perkembangan zaman, javascript tidak hanya berjalan di atas browser saja.
                            Javascript juga dapat digunakan pada sisi Server, Game, IoT, Desktop, dsb.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Javascript awalnya bernama <b>Mocha</b>, lalu berubah menjadi <b>LiveScript</b>
                            saat browser Netscape Navigator 2.0 rilis versi beta (September 1995). Namun, setelah itu
                            dinamai ulang menjadi Javascript. 1

                            Terinspirasi dari kesuksesan Javascript, Microsoft mengadopsi teknologi serupa. Microsoft
                            membuat ‘Javascript’ versi mereka sendiri bernama <b>JScript</b>. Lalu di tanam pada
                            Internet Explorer 3.0.

                            Hal ini mengakibatkan ‘ perang browser’, karena JScript milik Microsoft berbeda dengan
                            Javascript racikan Netscape.

                            Akhirnya pada tahun 1996, Netscape mengirimkan standarisasi ECMA-262 ke Ecma International.
                            Sehingga lahirlah standarisasi kode Javascript bernama <i>ECMAScript</i> atau <i>ES</i>.
                            Saat ini ECMAScript sudah mencapai versi 8 (ES8). 2</font>
                    </p>
                    <img src="assets/img/gallery/ecma.jpg" width="950" height="350"
                        style="display:block; margin:auto;" />

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
