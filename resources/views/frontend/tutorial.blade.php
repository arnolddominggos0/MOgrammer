

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>MOgrammer</title>


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
    <link rel="stylesheet" href="style.css">

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
  <div class="row">
    <div class="col">
      <h4 class="font-sans-serif text-primary fw-bold">EXPLORE</h4>
      <h1 class="mb-3"><b><font size="6">TEMUKAN TUTORIAL</font></b></h1>
      <p class="mb-4"><font size="4">Pelajari tutorial yang kamu inginkan.</font></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-5 mb-md-2 h-100">
        <div class="card-body px-4 py-6 py-md-5 py-lg-6">
          <img src="assets/img/gallery/iconJAVA.png" width="100" height="100" style="display:block; margin:auto;" />
          <p class="text-muted mb-2 my-md-3">Pelajari dasar-dasar pemrograman Java dan mulai dari nol.</p>
          <hr class="border border-1" />
          <div class="d-grid"> <a class="btn btn-lg btn-primary" href="java">Learn Java</a></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-5 mb-md-2 h-100">
        <div class="card-body px-4 py-6 py-md-5 py-lg-6">
        <img src="assets/img/gallery/iconPHP.png" width="200" height="100" style="display:block; margin:auto;" />
          <p class="text-muted mb-2 my-md-3">Pelajari dasar pemrograman PHP agar kamu paham cara coding di PHP.</p>
          <hr class="border border-1" />
          <div class="d-grid"><a class="btn btn-lg btn-secondary" href="php">Learn PHP</a></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-5 mb-md-2 h-100">
        <div class="card-body px-4 py-6 py-md-5 py-lg-6">
        <img src="assets/img/gallery/iconHTML.png" width="100" height="100" style="display:block; margin:auto;" />
          <p class="text-muted mb-2 my-md-3">Pelajari dasar-dasar HTML untuk membuat website dari awal.</p>
          <hr class="border border-1" />
          <div class="d-grid"> <a class="btn btn-lg btn-primary" href="html">Learn HTML</a></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-5 mb-md-2 h-100">
        <div class="card-body px-4 py-6 py-md-5 py-lg-6">
        <img src="assets/img/gallery/iconCSS.png" width="100" height="100" style="display:block; margin:auto;" />
          <p class="text-muted mb-2 my-md-3">Di tutorial kali ini, kita akan belajar dasar-dasar CSS dari awal hingga bisa membuat style web yang sangat menarik tentunya.</p>
          <hr class="border border-1" />
          <div class="d-grid"> <a class="btn btn-lg btn-primary" href="css">Learn Css</a></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-5 mb-md-2 h-100">
        <div class="card-body px-4 py-6 py-md-5 py-lg-6">
        <img src="assets/img/gallery/iconPhyton.png" width="100" height="100" style="display:block; margin:auto;" />
          <p class="text-muted mb-2 my-md-3">Tutorial belajar Python dari dasar. Python adalah bahasa tingkat tinggi untuk backend, machine learning, AI, dll.</p>
          <hr class="border border-1" />
          <div class="d-grid"> <a class="btn btn-lg btn-primary" href="python">Learn Python</a></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-5 mb-md-2 h-100">
        <div class="card-body px-4 py-6 py-md-5 py-lg-6">
        <img src="assets/img/gallery/iconJS.png" width="100" height="100" style="display:block; margin:auto;" />
          <p class="text-muted mb-2 my-md-3">Javascript adalah bahasa pemrograman yang bisa digunakan untuk membuat aplikasi web, server, desktop, dsb.</p>
          <hr class="border border-1" />
          <div class="d-grid"> <a class="btn btn-lg btn-primary" href="javascript">Learn JavaScript</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end of .container-->

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
