

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Mengenal apa itu java?: Tutorial untuk pemula</title>


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
            <h1><b><font size="10">Mengenal apa itu java: Tutorial belajar java dari dasar bagi pemula</font></b></h1>
            <hr size="3px" width="100%" >
            <br/>
            <br/>
            <p><font size="6">Jadi kamu memutuskan untuk belajar Java</font></p>
            <br/>
            <p><font size="6">Kamu harus simak artikel ini sampai selesai agar tetap termotivasi untuk balajar Java hingga menjadi seorang yang ahli Java.</font></p>
            <br/><br/>
            <p><font size="6">“Apa itu Java?”</font></p>
            <br/>
            <p><font size="6">“Darimana asal usul Java?”</font></p>
            <br/>
            <p><font size="6">“Mengapa sih harus belajar Java?”</font></p>
            <br/>
            <p><font size="6">Daripada berlama-lama yuk langsung kita gas aja ke penjelasannya.</font></p>
            <br/><br/><br/><br/>
            <h3><b><font size="8">Apa Itu Java?</font></b></h3>
            <br/><p><font size="6">Java adalah salah satu bahasa pemrograman populer yang digunakan untuk mengembangkan aplikasi mobile, desktop, hingga website. 
              Beberapa website besar dunia seperti, <b>Yahoo!</b>, <b>LinkedIn</b>, dan <b>Spotify</b> ternyata juga telah menggunakan Java untuk mengembangkan websitenya.
            </font></p>
            <br/>
            <p><font size="6">Java adalah bahasa pemrograman yang dibuat oleh <i>James Gosling</i>.</font></p>
            <br/>
            <img src="assets/img/gallery/gosling.jpg" width="750" height="500"
                            style="display:block; margin:auto;" />
                            <br/>
            <p><font size="6">Salah satu alasan populernya Java adalah fleksibilitasnya untuk digunakan di banyak platform. 
              Tak heran sekitar 12 juta developer menggunakan Java untuk pengembangan aplikasi.</font></p>
              <p><font size="6">Sintaks Java mirip seperti C/C++, karena Java banyak terinspirasi dari kedua bahasa ini.</font></p>
              <br/>
              <p><font size="6">Java dirancang untuk tujuan umum (general-purpose) dan sepenuhnya menganut paradigma <b>OOP (Object Oriented Programming)</b>.</font></p>
              <br/>
              <p><font size="6">OOP adalah paradigma pemrograman yang berbasis pada objek. Setiap kita membuat program, maka wajib hukumnya membuat objek terlebih dahulu.</font></p>
              <br/>
              <p><font size="6">Namun tenang saja, jika kamu belum tahu apa-apa tentang OOP, saya tidak akan menggunakan pendekatan OOP dalam menjelaskan Java di tutorial ini.</font></p>
              <p><font size="6">Sekarang yuk langsung saja kita bahas sejarah dari bahasa pemrograman Java</font></p>
              <br/>
              <br/>
              <h3><b><font size="8">Sejarah bahasa Java</font></b></h3>
              <p><font size="6">Pengembangan bahasa Java dimulai pada tahun 1991 oleh James Gosling, Mike Sherida, dan Patrick Naughton.</font></p>
              <br/>
              <p><font size="6">Awalnya Java bernama <b>Oak</b>, nama ini diambil dari nama pohon yang berada di dekat kantor James Gosling.</font></p>
              <p><font size="6">Lalu namanya diubah menjadi <b>Green</b> sebelum akhirnya berubah menjadi <b>Java</b>.</font></p>
              <br/>
              <br/>
              <p><font size="6">Nama Java dipilih karena James Gosling terinspirasi dari asal-usul kopi yang diminumnya saat itu, yakni berasal dari <b>Pulau Jawa</b>.</font></p>
              <br/>
              <p><font size="6">Oleh sebab itu logo Java itu bentuknya seperti secangkir kopi 😋</font></p>
              <br/>
              <img src="assets/img/gallery/kopi.jpg" width="750" height="500"
                            style="display:block; margin:auto;" />
                            <br/>
                            <br/>
              <h3><b><font size="8">Mengapa sih harus belajar Java?</font></b></h3>
              <br/>
              <p><font size="6">Saya akan coba berikan beberapa alasan yang mungkin akan membantumu tertarik untuk belajar Java:</font></p>
              <h5><b><font size="6">1. Java Bersifat General-purpose</font></b></h5>
              <p><font size="6">Java itu bahasa yang general-purpose, artinya Java tidak hanya dipakai untuk membuat program yang spesifik saja.</font></p>
              <p><font size="6">Kalau diibaratkan, Java itu seperti kunci inggris yang bisa membuka berbagai macam ukuran baut dan mur.</font></p>
              <img src="assets/img/gallery/kunciInggris.jpg" width="750" height="500"
                            style="display:block; margin:auto;" />
              <p><font size="6">Karena Java bisa dipakai untuk membuat berbagai macam aplikasi.</font></p>
              <br/>
              <p><font size="6">Mau bikin aplikasi Desktop.. ✔ bisa;</font></p>
              <br/>
              <p><font size="6">Mau bikin aplikasi Android.. ✔ bisa;</font></p>
              <br/>
              <p><font size="6">Mau bikin aplikasi Web.. ✔ juga bisa;</font></p>
              <br/>
              <br/>
              <h5><b><font size="6">2. Java itu Cross-platform</font></b></h5>
              <p><font size="6">Cross-platform artinya bisa berjalan di atas platform yang berbeda beda.</font></p>
              <p><font size="6">Java bisa digunakan di berbagai macam platform, bisa di Linux, Windows, dan MacOS.</font></p>
              <img src="assets/img/gallery/platform.png" width="750" height="375"
                            style="display:block; margin:auto;" />
              <p><font size="6">Dengan begini, kita tidak perlu pusing untuk membuat binary untuk tiap-tiap platform.</font></p>
              <p><font size="6">Misalnya, untuk windows kita harus bikin <b>.exe</b>, Linux <b>.deb</b> atau <b>.rpm</b>, dan Mac <b>.dmg</b>.</font></p>
              <p><font size="6">Cukup dengan file <b>jar</b> saja, jika di platform tersebut sudah terinstal Java, maka program tersebut akan langsung bisa dibuka.</font></p>
              <br/>
              <br/>
              <h5><b><font size="6">3. Java untuk Membuat Aplikasi Android</font></b></h5>
              <p><font size="6">Salah satu alasan yang kuat untuk belajar Java adalah untuk membuat aplikasi <b>android</b>.</font></p>
              <img src="assets/img/gallery/androidstd.png" width="750" height="375"
                            style="display:block; margin:auto;" />
              <p><font size="6">Meskipun sekarang Google lebih mengandalkan Kotlin dibandingkan Java, namun tidak ada salahnya belajar Java terlebih dahulu.</font></p>
              <p><font size="6">Kotlin memang lebih singkat dibandingkan Java, namun dibalik kode yang singkat itu ada peran Java.</font></p>
              <p><font size="6">Nah, dengan mengetahui Java.. nantinya kamu juga akan mudah memahami Kotlin.</font></p>
              <br/>
              <br/>
              <h5><b><font size="6">4. Java itu Populer</font></b></h5>
              <p><font size="6">Berdasarkan <i>TIOBE Programming Community Index</i>, Java adalah bahasa terpopuler ketiga pada tahun 2022.</font></p>
              <img src="assets/img/gallery/tiobe.png" width="775" height="375"
                            style="display:block; margin:auto;" />
                            <br/>
              <p><font size="6">Dari segi popularitas, Java bersaing dengan <b>Python</b> dan <b>C</b>.</font></p>
              <p><font size="6">Semakin populer sebuah bahasa, maka komunitasnya akan semakin banyak</font></p>
              <p><font size="6">Ini tentunya menguntungkan kita, karena saat terjadi masalah.. ada tempat bertanya dan berdiskusi.</font></p>


              









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
