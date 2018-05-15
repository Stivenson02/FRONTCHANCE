<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="CodePixar">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Gacela</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="../css/linearicons.css">
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <div id="top"></div>
        <!-- Start Header Area -->
        <header class="default-header">
            <div class="sticky-header">
                <div class="container">
                    <div class="header-content d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="#top" class="smooth"><img src="img/logo.png" alt=""></a>
                        </div>
                        <div class="right-bar d-flex align-items-center">
                            <nav class="d-flex align-items-center">

                                <div class="col-md-4"><a href="{{route('allusuarios_paht')}}">  <input class="primary-btn banner-btn" type="submit" value="Sorteo" required></a></div>
                                <div class="col-md-4"><a href="{{route('allusuarios_paht')}}">  <input class="primary-btn banner-btn" type="submit" value="Usuarios" required></a></div>
                                <div class="col-md-4"><a href="{{route('allusuarios_paht')}}">  <input class="primary-btn banner-btn" type="submit" value="Ventas" required></a></div>


                                <a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>
                            </nav>
                            <div class="search relative">
                                <span class="lnr lnr-magnifier"></span>
                                <form action="{{route('consulta_paht')}} " class="search-field" method="POST">
                                    {{ csrf_field() }}
                                    <input required name="identity" type="number" placeholder="Numero de identificacion" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numero de identificacion'">
                                    <button class="search-submit"><span class="lnr lnr-magnifier"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <!-- CONTEND -->
        @yield('content')
        <!-- END CONTEND -->

        <!-- Start Cta Area -->
        <section class="cta-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 d-flex no-flex-xs justify-content-between align-items-center">
                        <h5 class="text-uppercase text-white">Gacela pionera en chances</h5>
                        <a href="{{url('/')}}" class="primary-btn d-inline-flex text-uppercase text-white align-items-center">Inicio<span class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cta Area -->

        <script src="../js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/mixitup.min.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>
