<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Belajar HTML Dari Dasar: Pengenalan Dasar HTML Untuk Pemula</title>


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
                            <font size="10">Belajar HTML Dari Dasar: Pengenalan Dasar HTML Untuk Pemula</font>
                        </b></h1>
                    <hr size="3px" width="100%">
                    <br />
                    <br />
                    <p>
                        <font size="6">HTML memang bahasa yang wajib dipelajari, bagi yang mau menjadi web developer.
                            Karena
                            HTML merupakan bahasa dasar untuk membangun sebuah web.
                            kalian pasti sudah pernah mendengar kata HTML sebelumnya, Tapi tidak ada salahnya membaca
                            kebali artikel ini.</font>
                    </p>
                    <p>
                        <font size="6">Pada tutorial kali ini, kita benar-benar akan membahas dari nol hingga kamu bisa
                            membuat halaman HTML sendiri.
                            Baiklah Mari kita mulai!</font>
                    </p>
                    <br /><br /><br /><a
                        href="https://news.detik.com/berita/d-6067765/cara-baru-baca-artikel-18-pindahkan-dulu-akun-detikid-jadi-mpc-ya"
                        target="_blank">
                        <img src="assets/img/gallery/detikcom.jpeg" alt="Banner Iklan detik.com" width="800"
                            height="400" style="block; margin:auto;" /></a>
                    <br /><br /><br /><br />
                    <h4><b>
                            <font size="6">Apa Itu HTML?</font>
                        </b></h4>
                    <br />
                    <p>
                        <font size="6">HTML adalah bahasa yang digunakan untuk membuat halaman web.
                            Bagi yang berkecimpung di dunia perangkat gadget dan ilmu komputer, pasti sudah tidak asing
                            lagi dengan berbagai kode di dalamnya.
                            HTML adalah kependekan dari Hypertext Markup Language.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Kode HTML memastikan format teks dan gambar yang tepat untuk browser Internet.
                            Tanpa HTML, browser tidak akan tahu bagaimana menampilkan teks sebagai elemen atau memuat
                            gambar atau elemen lainnya.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Jadi, HTML itu adalah sebuah bahasa yang menggunakan <b>markup</b> atau penanda
                            untuk membuat halaman web.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Penanda atau markup ini, nanti akan kita sebut dengan <b>Tag</b>.</font>
                    </p>
                    <br /><br />
                    <p>
                        <font size="6">HTML itu seperti tulang dalam tubuh manusia. tulang-tulang ini harus tersusun
                            agar dapat membentuk badan manusia,
                            hingga menjadi fondasi dasar tubuh manusia.</font>
                    </p>
                    <img src="assets/img/gallery/tulangHTML.jpg" width="500" height="500"
                        style="display:block; margin:auto;" />
                    <br /><br />
                    <p>
                        <font size="6">Dalam membuat sebuah halaman website yang baik dan menarik, HTML tidak sendirian.
                            Ada bahasa lain juga yang menjadi pelengkapnya, yakni CSS dan Javascript seperti ilustrasi
                            diatas.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">CSS adalah bahasa khusus yang digunakan untuk mempercantik tampilan sebuah web.
                        </font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Lalu kemudian Javascript yang bertugas untuk membuat halaman web menjadi hidup.
                            Karena dengan Javascript, kita dapat menentukan fungsi-fungsi maupun efek yang akan
                            diterapkan di website tersebut.</font>
                    </p>
                    <br /><br />
                    <h4><b>
                            <font size="6">Perkembangan dan Versi HTML</font>
                        </b></h4>
                    <br />
                    <p>
                        <font size="6">HTML punya beberapa versi, dari versi yang paling tua hingga yang terbaru.
                            Berikut ini perkembangan versi HTML:</font>
                    </p>
                    <ul>
                        <li>
                            <font size="6"><strong>HTML 2.0</strong> <em>(24 November 1995)</em> adalah versi HTML
                                pertama yang resmi pertamakali beredar di pasaran dan dirilis oleh IETF;</font>
                        </li>
                        <li>
                            <font size="6"><strong>HTML 3.2</strong> <em>(14 Januari 1997)</em> versi resmi yang dirilis
                                W3C pertamakali.</font>
                        </li>
                        <li>
                            <font size="6"><strong>HTML 4.0</strong> <em>(24 April 1998)</em> versi pengembangan dari
                                yang sebelumnya;</font>
                        </li>
                        <li>
                            <font size="6"><strong>HTML 4.01</strong> <em>(24 Desember 1999)</em> versi perbaikan dari
                                HTML 4.0;</font>
                        </li>
                        <li>
                            <font size="6"><strong>XHTML 1.0</strong> <em>(26 Januari 2000)</em> pengembangan dari HTML
                                4.01 dengan mengadopsi XML;</font>
                        </li>
                        <li>
                            <font size="6"><strong>XHTML 2.0</strong> <em>(Augustus 2002—Juli 2006)</em> versi kedua
                                dari XHTML;</font>
                        </li>
                        <li>
                            <font size="6"><strong>HTML 5</strong> <em>(28 Oktober 2014)</em> versi html saat ini.
                            </font>
                        </li>
                    </ul>
                    <br />
                    <p>
                        <font size="6">Nah, sekarang saatnya kita untuk praktik!</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Adapun tools yang harus kamu persiapkan adalah:</font>
                    </p>
                    <br />
                    <p>
                        <font size="6"><b>1.Teks editor,</b> disini kita akan menggunakan <i>Visual Studio Code</i>
                            untuk mengetik kode-kode HTML. namun tentu saja Kamu bebas menggunakan teks editor apapun.
                        </font>
                    </p>
                    <br />
                    <img src="assets/img/gallery/VSCODE.png" width="750" height="350"
                        style="display:block; margin:auto;" />
                    <br /><br />
                    <p>
                        <font size="6"><b>2.Web browser,</b> akan kita gunakan untuk membuka dokumen HTML yang kita
                            buat,disini kita akan menggunakan <i>Google Chrome</i></font>
                    </p>
                    <img src="assets/img/gallery/chrome.png" width="300" height="300"
                        style="display:block; margin:auto;" />
                    <br />
                    <center>
                        <h4><b>
                                <font size="6">Membuat Dokumen HTML Pertama</font>
                            </b></h4>
                    </center>
                    <br />
                    <p>
                        <font size="6">Kini saatnya praktik, kamu harus mencoba sendiri membuat dokumen HTML. Caranya
                            sangat mudah.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Mari kita mulai dengan membuka teks editor, lalu tulislah kode berikut.</font>
                    </p>
                    <br />
                    <img src="assets/img/gallery/VSCODE2.png" width="750" height="300"
                        style="display:block; margin:auto;" />
                    <br />
                    <p>
                        <font size="6">Setelah itu, simpan dengan nama <b>helloworld.html</b>.</font>
                    </p>
                    <br />
                    <p>
                        <font size="6">Sekarang cobalah buka file <b>helloworld.html</b> dengan <i>Google Chrome</i>
                            tadi maka hasilnya akan seperti berikut:</b></font>
                    </p>
                    <br />
                    <img src="assets/img/gallery/helloworld.png" width="950" height="250"
                        style="display:block; margin:auto;" />
                    <br />
                    <p>
                        <font size="6">Selamat! 🎉 Kalian sudah berhasil membuat halaman web pertama dengan HTML.</b>
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