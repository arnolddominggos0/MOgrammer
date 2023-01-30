<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    Document Title-->
    <!-- ===============================================-->
    <title>MOgrammer</title>

    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.icon') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />

  </head>


  <body>
    <main class="main" id="top">
      @include('frontend.include.begin')
     
      @include('frontend.include.header')
      
      <section class="pt-6 bg-600" id="home" style="height: 800px;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="{{ asset('assets/img/gallery/hero-header.png')}}" width="470" alt="hero-header" /></div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <h3 class="fw-bold font-sans-serif">MOgrammer</h3>
              <h1 class="fs-6 fs-xl-7 mb-2">Kejar mimpimu bersama kami</h1>
              <a class="btn btn-primary me-4" href="tutorial" role="button">Let's GO!</a>
            </div>
          </div>
        </div>
      </section>
     
      <section>
        <div class="container">
          <div class="row">
            <h1 class="text-center mb-5"> Top Berita Terkini</h1>
            <div class="col-md-4 mb-4">
              <div class="card h-100 mb-2"><img class="card-img-top" src="{{ asset('assets/img/gallery/design.png')}}" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Perbedaan Web Designer dan UX Designer</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="https://student-activity.binus.ac.id/himka/2021/05/19/web-designer-vs-ui-ux-designer-apakah-perbedaannya/">binus.ac.id</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/psychology.png')}}" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Perkembangan Teknologi Di Era 4.0</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="https://www.kompasiana.com/hidayattri27/60ec2c2430e98b467c26e3b2/perkembangan-teknologi-di-era-revolusi-industri-4-0">Kompasiana</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/philosophy.png')}}" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Pentingnya UI & UX</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="https://integrasolusi.com/blog/pentingnya-peran-ui-ux-dalam-sebuah-aplikasi/#:~:text=Baru-baru%20ini%2C%20UI%20%2F%20UX%20telah%20memperlihatkan%20perkembangan,pengunjung%20website%29%20dalam%20interaksi%20antara%20pengguna%20dan%20produk.">IntegraOffice</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/photographs.png')}}" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Artificial Intelligence(AI)</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="https://www.kompas.com/skola/read/2021/07/05/121323869/artificial-intelligence-ai-pengertian-perkembangan-cara-kerja-dan">Compas.com</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/arguments.png')}}" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">BKF Kemenkeu: Kuartal I 2021, Pasar Saham Meningkat</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="https://www.republika.co.id/berita/qr6b7q370/bkf-kemenkeu-kuartal-i-2021-pasar-saham-meningkat">REPUBLIKA.co.id</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/experience-design.png')}}" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Menjadi Seorang Data Science</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="https://glints.com/id/lowongan/data-science-adalah/#.Y8EHzP5Bw2w">glints.com</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/user-research.png')}}" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Apa Itu User Experience Design?</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="https://www.interaction-design.org/literature/topics/ux-design">interaction-design.org</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/critical-thinking.png')}}" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Pentingnya Data Analytic Untuk Perkembangan Bisnis</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="https://www.softwareseni.co.id/blog/pentingnya-data-analytic-untuk-perkembangan-bisnis">softwareseni</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100"><img class="card-img-top w-100" src="{{ asset('assets/img/gallery/art-design.png')}}" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Bagaimana Membranding Sebuah Produk?</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="https://blog.mokapos.com/cara-branding-produk-sehingga-dikenal-konsumen">mokapos.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      
      @include('frontend.include.footer')
    </main>
    
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