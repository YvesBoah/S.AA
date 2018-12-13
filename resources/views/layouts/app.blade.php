<!-- <!DOCTYPE html> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serenity S.A</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- <script src="{{ asset('js/vue.js') }}"></script> -->


    <!-- Styles -->
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicon -->
        <link rel="icon"  href="{{ asset('assets/images/favicon/serenity_sa.ico') }}" />

        <!-- Bootstrap & Plugins CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link href="{{ asset('assets/css/blue5e1f.css?v=2') }}" rel="stylesheet" type="text/css">
            <title>Serenity S.A</title>
</head>
<style>
    #taille_logo{
        width: 100px;
        height: 50px;

    }
</style>

<body>


    <!-- ***** Preloader Start ***** -->
    <!-- <div class="loader-wrapper" style="visibility: hidden; display: none; opacity: 0;"> -->
   <!--  <div class="loader-wrapper">
        <div class="loader">
            <div class="bubble-1"></div>
            <div class="bubble-2"></div>
            <div class="bubble-3"></div>
        </div>
    </div> -->
    <!-- ***** Preloader End ***** -->
    <div id="app">
        

        <!-- ***** Header Area Start ***** -->
    <header class="header-area header-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{ asset('assets/images/logo.jpg') }}" id="taille_logo" alt="Serenity"/>
                        </a>
                        <!-- ***** Logo End ***** -->


                        <!-- ***** Menu Start ***** -->
                        <!-- <ul class="nav" style="display: block;"> -->
                        <ul class="nav">
                            <li><a href="{{ url('/') }}">Acceuil</a></li>
                            @auth
                            <li class="submenu">
                                <a href="javascript:;">Fiche</a>
                                <ul>
                                    <!-- Mettre une condition sur la création de fiche pour limité à 1e création -->
                                    <li><a href="{{ route('Client.create') }}">Créé une fiche client</a></li>
                                    <li><a href="{{ route('Client.index') }}">Apercu de la fiche Client</a></li>
                                </ul>
                            </li>
                          
                            @admin
                            <li class="submenu">
                                <a href="javascript:;">Agence</a>
                                <ul>
                                    <li><a href="{{ route('Agence-Admin.create') }}">Créé une agence</a></li>
                                    <!-- <li><a href="{{ route('Agence-Admin.index') }}">Voir toutes les agences</a></li> -->
                                </ul>
                            </li>
                            @endadmin

                               <li class="submenu">
                                    <a href="javascript:;">Contrat</a>
                                    <ul>
                                        <li><a href="{{ route('Contrat-Auto.create') }}">Automobile</a></li>
                                        <li><a href="{{ route('Contrat-Auto.index') }}">Détail de l'automobile</a></li>
                                   {{-- <li><a href="{{ route('Contrat-MRH.create') }}">Multirisque Habitation</a></li>
                                        <li><a href="{{ route('Contrat-GAV.create') }}">Garantie Accidents </a></li>  --}} 
                                    </ul>
                                </li>

                                <li class="submenu">
                                    <a href="javascript:;">Assuré un objet </a>
                                    <ul>
                                        <li><a href="{{ route('ObjetAssurer_Auto.create') }}">Assuré un véhicule</a></li>
                                        <li><a href="{{ route('ObjetAssurer_Auto.index') }}">Détail du véhicule Assuré</a></li>
                                        <li><a href="{{ route('Garantie_Auto.create') }}">Garantire un véhicule</a></li>
                                        <li><a href="{{ route('Garantie_Auto.index') }}">Détail du véhicule Garantit</a></li>
                                    </ul>
                                </li>  
                                <li class="submenu">
                                    <a href="javascript:;">Mes Souscriptions  </a>
                                    <ul>
                                        <li><a href="{{ route('Souscription_Auto.index') }}">Souscription Automobile</a></li>
                                        <li><a href="{{ route('Souscription_GAV.index') }}">Souscription GAV</a></li>
                                        <li><a href="{{ route('Souscription_MRH.index') }}">Souscription MRH</a></li>
                                        
                                    </ul>
                                </li>
                            @endauth
                        </ul>
                        <a class='menu-trigger '>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->

                        <!-- ***** Header Buttons Start ***** -->
                        <ul class="header-buttons">
                            @guest
                            <li><a class="btn-nav-line" href="{{ route('login') }}">Connexion</a></li>
                             @if (Route::has('register'))
                            <li><a class="btn-nav-primary" href="{{ route('register') }}">Inscription</a></li>
                             @endif
                            @else
                            <ul class="nav">
                                <li class="submenu">
                                    <a href="javascript:;">{{ Auth::user()->name }}</a>
                                    <ul>
                                          <li><a href="{{ route('home') }}">Mon Profil</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">Déconnexion</a>

                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                                                 style="display: none;">
                                            @csrf
                                        </form>
                                        </li>
                                       
                                    </ul>
                                </li>
                            </ul>
                             @endguest
                        </ul>
                        <!-- ***** Header Buttons End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

<!-- <br>
<br>
<br> -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>









<!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <img src="{{ asset('assets/images/logo.jpg') }}" id="taille_logo" class="logo" alt="">
                    <div class="text">Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <h5>Helpful Links</h5>
                    <ul class="footer-nav">
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>About Us</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Features</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>FAQ’s</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Blog</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Contact</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <h5>Features</h5>
                    <ul class="footer-nav">
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Worldwide</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Scalable</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Modular</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Connectivity</span></a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i><span>Corporate</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <h5>Contact Us</h5>
                    <div class="address">
                        <p>455 West Orchard Street<br>Kings Mountain, NC 28086</p>
                        <p>Phone: (272) 211-7370</p>
                        <p><span>E-Mail:</span><a href="#">support@yourbrand.com</a></p>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">© 2018 Serenity S.A All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer End ***** -->








  <!-- jQuery -->
    <script src="{{ asset('assets/js/jz.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script> 

    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

<style type="text/css">
.flashy {
    font-family: "Source Sans Pro", Arial, sans-serif;
    padding: 11px 30px;
    border-radius: 4px;
    font-weight: 400;
    height: 90px;
    position: fixed;
    z-index:99999999999;
    top: 20px;
    right: 20px;
    font-size: 16px;
    color: #fff;
}
@media only screen and (max-width:1050px) {
    .flashy {
        text-align: center;
        right: 0;
        left: 50%;
        width: 300px;
        margin-left: -150px;
    }
}
</style>

<script id="flashy-template" type="text/template">
    <div class="flashy flashy--{{ Session::get('flashy_notification.type') }}">
    <span style="font-size: 2.5em; color: grey;">
        <i class="fas fa-envelope-open"></i>
    </span>
        <a href="#" class="flashy__body" target="_blank"></a>
    </div>
</script>

<!-- <script src="//code.jquery.com/jquery.js"></script> -->
<script src="{{ asset('js/jq.js') }}"></script>
@include('flashy::message')


<script>
    function flashy(message, link) {
        var template = $($("#flashy-template").html());
        $(".flashy").remove();
        template.find(".flashy__body").html(message).attr("href", link || "#").end()
         .appendTo("body").hide().fadeIn(500).delay(8000).animate({
            marginRight: "-100%"
        }, 300, "swing", function() {
            $(this).remove();
        });
    }
</script>
</body>
</html>
