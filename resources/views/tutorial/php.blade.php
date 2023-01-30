<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Belajar PHP: Konsep Dasar PHP Yang Harus Dipahami Pemula</title>


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
              <font size="10">Belajar PHP: Konsep Dasar PHP Yang Harus Dipahami Pemula</font>
            </b></h1>
          <hr size="3px" width="100%">
          <br />
          <br />
          <p>
            <font size="6">Selamat datang di Tutorial Belajar PHP untuk pemula.</font>
          </p>
          <p>
            <font size="6">Banyak pemula yang bingung dan bertanya:</font>
          </p>
          <p>
            <font size="6">“Gimana sih cara membuat web dengan PHP?”</font>
          </p>
          <p>
            <font size="6">“Apa saja alat-alat yang diperlukan untuk coding PHP?”</font>
          </p>
          <p>
            <font size="6">Bagaimana sih sejarah PHP?</font>
          </p>
          <br /><br /><br /><a href="https://news.detik.com/berita/d-6067765/cara-baru-baca-artikel-18-pindahkan-dulu-akun-detikid-jadi-mpc-ya" target="_blank">
            <img src="assets/img/gallery/detikcom.jpeg" alt="Banner Iklan detik.com" width="800" height="400" style="block; margin:auto;" /></a>
          <br /><br /><br /><br />
          <h4><b>
              <font size="6">Asal usul bahasa pemrograman PHP</font>
            </b></h4>
          <br />
          <p>
            <font size="6">Pada zaman dulu,Web itu statis, cuma dibuat dengan HTML dan sedit sentuhan CSS.</font>
          </p>
          <br />
          <p>
            <font size="6">Waktu itu memang teknologi web masih belum secanggih sekarang.</font>
          </p>
          <br />
          <p>
            <font size="6">Jadi saat orang membuka web, mereka sebenarnya cuma membuka file HTML dari web server.</font>
          </p>
          <br />
          <p>
            <font size="6">Karena itu, di tahun 1993 Rasmus Lerdorf membuat bahasa pemrograman PHP.</font>
          </p>
          <img src="assets/img/gallery/rasmus.jpg" width="950" height="750" style="display:block; margin:auto;" />
          <br />
          <p>
            <font size="6">Awalnya PHP cuma dipakai sendiri oleh Rasmus Lerdorf, kemudian di-rilis ke publik di tahun 1995.</font>
          </p>
          <br />
          <p>
            <font size="6">Dulu PHP dikenal sebagai singkatan:

              <i>PHP = Personal Home Page</i>.

              Tapi makin ke sini, singkatan itu berubah menjad:

              <i>PHP = PHP: Hypertext Preprocessor</i>.
            </font>
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

  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
</body>

</html>