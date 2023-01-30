<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuis</title>

    <!--Favicons-->
    <!--===============================================-->
    <link rel="icon" type="image/png" sizes="" href="{{ asset('assets/img/gallery/logoMogrammer1.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.icon') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--Stylesheets-->
    <!--===============================================-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="https://cdn.reflowhq.com/v2/toolkit.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/vanilla-zoom.min.css')}}">

</head>

<body>
    <main class="main" id="top">
        @include('frontend.include.begin')

        @include('frontend.include.header')
        <section class="bg-600">
            <div class="container">
                <div class="row d-lg-flex justify-content-lg-center" style="border-radius: 80px; ">
                    <div class="col-md-9">
                        <div class="card block-content my-5" style="border-radius: 15px; ">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid d-lg-flex px-6 py-1" src="{{asset ('assets/img/Java.png')}}"></div>
                                <div class="col-lg-7" style="border-radius: 27px; padding-top: 32px;">
                                    <div class="info"><span style="font-size: 40px;font-family: 'Roboto' Francois', Sans-serif;">Kuis Java</span></div>
                                    <div class="info" style="padding-top: 0px;"><span class="text-muted" style="font-size: 15px;">5 soal</span></div>
                                    <div class="d-lg-flex justify-content-lg-end info px-5 py-3"><button class="btn btn-outline-primary btn-sm text-end d-lg-flex justify-content-lg-end" type="button" style="border-radius: 30px;"><a href="/kuis/java">Mulai</button></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="card block-content my-5" style="border-radius: 15px; ">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid d-lg-flex flex-fill px-6 py-3" src="{{asset ('assets/img/HTML.png')}}"></div>
                                <div class="col-lg-7" style="border-radius: 27px; padding-top: 32px;">
                                    <div class="info"><span style="font-size: 40px;font-family: 'Roboto' Francois', Sans-serif;">Kuis HTML</span></div>
                                    <div class="info" style="padding-top: 0px;"><span class="text-muted" style="font-size: 15px;">5 soal</span></div>
                                    <div class="d-lg-flex justify-content-lg-end info px-5 py-3"><button class="btn btn-outline-primary btn-sm text-end d-lg-flex justify-content-lg-end" type="button" style="border-radius: 30px;"><a href="/kuis/html">Mulai</button></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="card block-content my-5" style="border-radius: 15px; ">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid d-lg-flex flex-fill px-5 py-4" src="{{asset ('assets/img/PHP.png')}}"></div>
                                <div class="col-lg-7" style="border-radius: 27px; padding-top: 32px;">
                                    <div class="info"><span style="font-size: 40px;font-family: 'Roboto' Francois', Sans-serif;">Kuis PHP</span></div>
                                    <div class="info" style="padding-top: 0px;"><span class="text-muted" style="font-size: 15px;">5 soal</span></div>
                                    <div class="d-lg-flex justify-content-lg-end info px-5 py-3"><button class="btn btn-outline-primary btn-sm text-end d-lg-flex justify-content-lg-end" type="button" style="border-radius: 30px;"><a href="/kuis/php">Mulai</button></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="card block-content my-5" style="border-radius: 15px; ">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid d-lg-flex flex-fill mx-5 my-1" style="width: 170px;" src="{{asset ('assets/img/gallery/iconJS.png')}}"></div>
                                <div class="col-lg-7" style="border-radius: 27px; padding-top: 32px;">
                                    <div class="info"><span style="font-size: 40px;font-family: 'Roboto' Francois', Sans-serif;">Kuis JavaScript</span></div>
                                    <div class="info" style="padding-top: 0px;"><span class="text-muted" style="font-size: 15px;">5 soal</span></div>
                                    <div class="d-lg-flex justify-content-lg-end info px-5 py-3"><button class="btn btn-outline-primary btn-sm text-end d-lg-flex justify-content-lg-end" type="button" style="border-radius: 30px;"><a href="/kuis/javascript">Mulai</button></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="card block-content my-5" style="border-radius: 15px; ">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid d-lg-flex flex-fill mx-5 my-1" style="width: 170px;" src="{{asset ('assets/img/gallery/iconCSS.png')}}"></div>
                                <div class="col-lg-7" style="border-radius: 27px; padding-top: 32px;">
                                    <div class="info"><span style="font-size: 40px;font-family: 'Roboto' Francois', Sans-serif;">Kuis CSS</span></div>
                                    <div class="info" style="padding-top: 0px;"><span class="text-muted" style="font-size: 15px;">5 soal</span></div>
                                    <div class="d-lg-flex justify-content-lg-end info px-5 py-3"><button class="btn btn-outline-primary btn-sm text-end d-lg-flex justify-content-lg-end" type="button" style="border-radius: 30px;"><a href="/kuis/css">Mulai</button></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="card block-content my-5" style="border-radius: 15px; ">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid d-lg-flex flex-fill mx-5 my-1" style="width: 170px;" src="{{asset ('assets/img/gallery/iconPhyton.png')}}"></div>
                                <div class="col-lg-7" style="border-radius: 27px; padding-top: 32px;">
                                    <div class="info"><span style="font-size: 40px;font-family: 'Roboto' Francois', Sans-serif;">Kuis Python</span></div>
                                    <div class="info" style="padding-top: 0px;"><span class="text-muted" style="font-size: 15px;">5 soal</span></div>
                                    <div class="d-lg-flex justify-content-lg-end info px-5 py-3"><button class="btn btn-outline-primary btn-sm text-end d-lg-flex justify-content-lg-end" type="button" style="border-radius: 30px;"><a href="/kuis/python">Mulai</button></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="clean-blog-post">
                            <div class="products"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.include.footer')
    </main>

    <!--JavaScripts-->
    <!--===============================================-->
    <script src="{{ asset('vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{ asset('assets/js/theme.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.reflowhq.com/v2/toolkit.min.js"></script>
    <script src="{{ asset('assets/js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="{{ asset('assets/js/vanilla-zoom.js')}}"></script>
    <script src="{{ asset('assets/js/theme2.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
</body>

</html>