@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<!-- <div class="container-fluid"> -->
    <!-- ***** Team Start ***** -->
    <section class="section padding-top-80" id="our-team">
        <!-- <div class="container"> -->
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Mon Profil</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Dans ce menu déroulant vous verrez toutes les procédures de création d'affaires</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-4 offset-lg-1 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="user-image">
                            <img src="{{ asset('assets/images/photos/team/1.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="user-name">{{Auth::user()->name}}</h3>
                            <span>{{Auth::user()->telephone}}</span>
                            <span>{{Auth::user()->email}}</span>
                            <p>Inscrit le {{Auth::user()->created_at}}</p>
                            <ul class="social">
                                <li><a href="Profil/{{Auth::user()->id}}/edit"><i class="fa fa-edit"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->
                
                <div class="col-lg-7 col-md-12 col-sm-12">
                    

<!-- Algorithme Laravel -->
<?php 
$a1=0;
$a2=0;
$a3=0;
$a4=0;

 ?>
<!-- Client -->
@if(count($Client)>0)
<?php  $a1 =10; ?>
   <?php  $ab = '<i class="fas fa-check-circle text-success"></i>'; ?>     
@else
<?php  $a1 = 0; ?>
   <?php  $ab = '<i class="fas fa-times text-danger"></i>'; ?>     
@endif


<!-- Contrat Auto -->

@if(count($Contrat_Auto)>0)
<?php  $a2 =20; ?>
   <?php  $ac = '<i class="fas fa-check-circle text-success"></i>'; ?>     
@else
<?php  $a2 = 0; ?>
   <?php  $ac = '<i class="fas fa-times text-danger"></i>'; ?>     
@endif

<!-- Objet Assuré-->

@if(count($ObjetAssurer)>0)
<?php  $a3 =10; ?>
   <?php  $ad = '<i class="fas fa-check-circle text-success"></i>'; ?>     
@else
<?php  $a3 = 0; ?>
   <?php  $ad = '<i class="fas fa-times text-danger"></i>'; ?>     
@endif

<!-- Garantie Auto -->
@if(count($garantie_Auto)>0)
<?php  $a4 =15; ?>
   <?php  $ae = '<i class="fas fa-check-circle text-success"></i>'; ?>     
@else
<?php  $a4 = 0; ?>
   <?php  $ae = '<i class="fas fa-times text-danger"></i>'; ?>     
@endif


<!-- Affichage de la barre de progression -->
<?php  $All= $a1+$a2+$a3+$a4; ?>
<!-- Algorithme Laravel -->







<!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="container">
                <div class="row">
                    <!-- ***** FAQ Start ***** -->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <br>
                        <br>
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            Procédure de création de contrat automobile
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <strong>Suivez les étapes </strong> <br>
                                        <ul>
                                            <li>- créer une fiche client  <?php echo $ab; ?></li>
                                            <li>- créer un contrat  <?php  echo $ac; ?></li>
                                            <li>- Assurer un vehicule   <?php  echo $ad; ?></li>
                                            <li>- Ajouter une garantie à un vehicule <?php  echo $ae; ?></i></li>
                                            <li>- Souscrire à un forfait   <i class="fas fa-times text-danger"></i></li>
                                            <li>- effectuer le paiement via un opérateur de téléphonie mobile   <i class="fas fa-times text-danger"></i></li>
                                        </ul>
                                        <br>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width:{{$All}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><?php echo $All; ?>%/100%</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            Procédure de création de contrat Multirisque Habitation (MRH)
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                         <strong>Suivez les étapes </strong> <br>
                                        <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            Procédure de création de contrat Garantie assurance de la vie (GAV)
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                         <strong>Suivez les étapes </strong> <br>
                                        <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            + d'informations
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <strong>Nous Appellez.</strong>
                                        
                                    </div>
                                </div>
                            </div>
                         
                      
                            
                        </div>
                    </div>
                    <!-- ***** FAQ End ***** -->




                </div>
               
                
               
                
               
            </div>
        </div>
     </div> 
 </div>
    </section>
    <!-- ***** Team End ***** -->
<!-- </div> -->




@endsection
