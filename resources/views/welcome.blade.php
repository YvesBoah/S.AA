<!-- <!doctype html> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Favicon -->
       <link rel="icon"  href="{{ asset('assets/images/favicon/serenity_sa.ico') }}" />

        <!-- Bootstrap & Plugins CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
       <!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->

        <!-- Custom CSS -->
        <link href="{{ asset('assets/css/blue5e1f.css?v=2') }}" rel="stylesheet" type="text/css">
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
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="{{ asset('assets/images/logo.jpg') }}" id="taille_logo" alt="Serenity"/>
                        </a>
                        <!-- ***** Logo End ***** -->


                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ url('/') }}">Acceuil</a></li>
                        <!--     <li class="submenu">
                                <a href="javascript:;">Discover</a>
                                <ul>
                                    <li><a href="blue-index.html#features">Features</a></li>
                                    <li><a href="blue-index.html#our-team">Our Team</a></li>
                                    <li><a href="blue-index.html#pricing-plans">Pricing Plans</a></li>
                                    <li><a href="blue-index.html#blog">Latests Blogs</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="blue-about.html">About Us</a></li>
                                    <li><a href="blue-features.html">Features</a></li>
                                    <li><a href="blue-faq.html">FAQ's</a></li>
                                    <li><a href="blue-blog.html">Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="blue-contact.html">Contact</a></li> -->
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->

                        <!-- ***** Header Buttons Start ***** -->
                        <ul class="header-buttons">
                            @if (Route::has('login'))
               
                                @auth
                                    <li><a class="btn-nav-primary" href="{{ url('/home') }}">Profil</a></li>
                                @else
                                    <li><a class="btn-nav-line" href="{{ route('login') }}">Connexion</a></li>
                                    @if (Route::has('register'))
                                    <li><a class="btn-nav-primary" href="{{ route('register') }}">Inscription</a></li>
                                    @endif
                                @endauth
                             @endif
                        </ul>
                        <!-- ***** Header Buttons End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <body>
     
            

<!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <!-- ***** Header Background Image Start ***** -->
        <div class="right-bg">
            <img src="{{ asset('assets/images/photos/header.jpg') }}" class="img-fluid float-right" alt="">
        </div>
        <!-- ***** Header Background Image End ***** -->

        <div class="header-bg">
            <img src="{{ asset('assets/images/header-bg.svg') }}" class="img-fluid" alt="">
        </div>

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <h1>E-Serenity S.A</h1>
                        <p>Serenity S.A vous rassure vous et votre famille.</p>
                        <a href="#" class="btn-primary-line">Souscrire</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->





<!--  -->
<!--  -->





<!-- ***** Features Small Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="test features-small-item item-1 active">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h5 class="features-title">Automobile</h5>
                                <p>Cette formule sécurise votre bien </p>
                               <div class="q" style="display: none"> 
                                        
                       
                    
                         </div>
                                <a href="blue-features-single.html">
                                    <span>Voir plus</span>
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="test features-small-item item-2  ">
                                <div class="icon">
                                    <i class="fa fa-sort-amount-asc"></i>
                                </div>
                                <h5 class="features-title">Garantie Accidents de vie (GAV)</h5>
                                <!-- <p class="q"> -->
                                   
                                        <p>Carte Grise 
                                        Permis de conduire
                                        Assurance accidents de la vie.</p>                                                                  
                                <!-- </p> -->
                                <a href="blue-features-single.html">
                                   <span>Voir plus</span>
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="test features-small-item item-3 ">
                                <div class="icon">
                                    <i class="fa fa-th-large"></i>
                                </div>
                                <h5 class="features-title">Multirisque Habitation (MRH)</h5>
                                <p class="q">Cette formule prends soins de vous !</p>
                                <a href="blue-features-single.html">
                                    <span>Voir plus</span>
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
                            <div class="test features-small-item item-4">
                                <div class="icon">
                                    <i class="fa fa-bank"></i>
                                </div>
                                <h5 class="features-title">SERENITY Voyage</h5>
                                <p class="q">Cette formule prends soins de vous !</p>
                                <a href="blue-features-single.html">
                                    <span>Voir plus</span>
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center message">
                    <div class="left-heading">
                        <h2 class="text-center">Assurance Automomobile</h2>
                    </div>
                    <div class="left-text">
                  
                        <h4 class="text-center">L'assurance est notre vie.</h4>
                        
                       <!--  <ul>
                            <li>Carte Grise.</li>
                            <li>Permis de conduire.</li>
                            <li>Visite technique</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->



    <!-- ***** Download Parallax Start ***** -->
    <section class="parallax" id="download" data-image="assets/images/photos/parallax.jpg">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8">
                        <div class="info">
                            <p>Téléchargez l'application de bureau et mobile de Serenity S.A.</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Download Buttons Start ***** -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 download-btn-content">
                        <a href="#" class="btn-download">
                            <i class="fa fa-windows"></i>
                            <strong>Windows</strong>
                            <span>v0.1.2 - 128 mb.</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 download-btn-content">
                        <a href="#" class="btn-download">
                            <i class="fa fa-apple"></i>
                            <strong>macOS</strong>
                            <span>v0.1.2 - 210 mb.</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 download-btn-content">
                        <a href="#" class="btn-download">
                            <i class="fa fa-android"></i>
                            <strong>Android</strong>
                            <span>v0.1.2 - 42 mb.</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 download-btn-content">
                        <a href="#" class="btn-download">
                            <i class="fa fa-mobile-phone"></i>
                            <strong>iPhone</strong>
                            <span>v0.1.2 - 54 mb.</span>
                        </a>
                    </div>
                </div>
                <!-- ***** Download Buttons End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Download Parallax End ***** -->


    <!-- ***** Team Start ***** -->
    <section class="section padding-top-80" id="our-team">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Témoignages</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Ces personnes témoignes des expériences vécus avec nous !</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="user-image">
                            <img src="assets/images/photos/team/1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="user-name">Fletch Skinner</h3>
                            <span>Product Strategist</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <p>C'est super !</p>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->
                
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="user-image">
                            <img src="assets/images/photos/team/2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="user-name">Lance Bogrol</h3>
                            <span>Visual Designer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <p>Le service est bon.</p>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->
                
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="user-image">
                            <img src="assets/images/photos/team/3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="user-name">Valentino Morose</h3>
                            <span>Android Developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <p>Pas mal</p>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->
                
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="user-image">
                            <img src="assets/images/photos/team/4.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="user-name">Giles Posture</h3>
                            <span>iOS Developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <p>j'aime bien le service !</p>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Team End ***** -->


    <!-- ***** Pricing Plans Start ***** -->
    <section class="section white padding-top-80" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Prix de souscriptions</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">AUTOMOBILE</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="number">
                                <span>1</span>
                            </div>
                            <div class="price-wrapper">
                                <span class="currency">FCFA</span>
                                <span class="price">30.000</span>
                                <span class="period">/Mois</span>
                            </div>
                            <ul class="list">
                                <li class="active">Carte grise</li>
                                <li class="active">Permis de conduire</li>
                                <li class="active">Visite technique</li>
                                <li class="active">Garanties basiques</li>
                                <li class="active">Garanties optionnelles</li>
                                <li class="active">Mode de paiement</li>
                               
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{route('Souscription_Auto.create')}}">Souscrire</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item ">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Garantie Accidents de vie (GAV)</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="number">
                                <span>2</span>
                            </div>
                            <div class="price-wrapper">
                                <span class="currency">FCFA</span>
                                <span class="price">60.000</span>
                                <span class="period">/Mois</span>
                            </div>
                            <ul class="list">
                                <li class="active">Valeur du bâtiment</li>
                                <li class="active">Loyer mensuel</li>
                                <li class="active">La valeur du contenu</li>
                                <li class="active">Garanties basiques</li>
                                <li class="active">Garanties optionnelles</li>
                                <li class="active">Mode de paiement</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                              <a href="{{route('Souscription_GAV.create')}}">Souscrire</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

    <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title"> Multirisque Habitation (MRH)</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="number">
                                <span>3</span>
                            </div>
                            <div class="price-wrapper">
                                <span class="currency">FCFA</span>
                                <span class="price">90.000</span>
                                <span class="period">/Mois</span>
                            </div>
                            <ul class="list">
                                <li class="active">Activité du prospect</li>
                                <li class="active">L’âge du prospect</li>
                                <li class="active">Capitaux à garantir</li>
                                <li class="active">Garanties basiques</li>
                                <li class="active">Garanties optionnelles</li>
                                <li class="active">Mode de paiement</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{route('Souscription_MRH.create')}}">Souscrire</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->


                <!-- ***** Pricing Item Start ***** -->
               <!--  <div class="col-lg-3 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Serenity Voyage</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="number">
                                <span>3</span>
                            </div>
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">29.90</span>
                                <span class="period">/Month</span>
                            </div>
                            <ul class="list">
                                <li class="active">Automatic categorization</li>
                                <li class="active">Back office portal</li>
                                <li class="active">Manual imports</li>
                                <li class="active">Prepaid card</li>
                                <li class="active">SWIFT payments</li>
                                <li class="active">eWallet payments</li>
                                <li class="active">Cryptocurrency</li>
                                <li class="active">Monthly Reports</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                              <a href="#">Souscrire</a>
                        </div>
                    </div>
                </div> -->
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->


    <!-- ***** Subscribe Parallax Start ***** -->
    <section class="parallax" id="subscribe">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8">
                        <div class="info">
                            <p>Recevoir notre newsletters</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Subscribe Form Start ***** -->
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="subscribe-wrapper">
                            <input type="email" placeholder="entre ton adresse email">
                            <button>S'abonnez</button>
                        </div>
                        <span class="subscribe-info"></span>
                    </div>
                </div>
                <!-- ***** Subscribe Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Subscribe Parallax End ***** -->
















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
<!--  -->
<!--  -->





    <!-- jQuery -->
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
<!-- <script>
     $('div[class^="test"]').click(function(){
         let me = $('.message').text()
         let d =$(this).children('p[class="q"]').text()
         $('.message').text(d)
      
     })
</script> -->
</body>

    </body>
</html>
