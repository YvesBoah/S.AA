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
                        <h2 class="section-title">Détail du contrat</h2>
                    </div>
                </div>
               
            </div>
            <!-- ***** Section Title End ***** -->

        <div class="row">
            <div class="col-lg-12">
                @foreach($Contrat_Auto as $Contrat)
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-4 offset-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="user-image">
                            <img src="{{ asset('assets/images/photos/team/1.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="user-name text-muted"><strong>Marque de voiture : {{$Contrat->   marque_de_voiture}}</strong></h4>
                            <p><strong> Immatriculation : {{$Contrat->immatriculation}}</strong></p>
                            <p><strong> Puissance : {{$Contrat->puissance}}</strong></p>
                            <p><strong> Type : {{$Contrat->type}}</strong></p>
                            <p><strong> Carrosserie  : {{$Contrat->carrosserie }}</strong></p>
                            <p><strong> Energie  : {{$Contrat->energie }}</strong></p>
                            <p><strong> Valeur neuve  : {{$Contrat->valeur_neuve }}</strong></p>
                            <p><strong> Date de premiere mise en circulation  : {{$Contrat->date_premiere_circulation }}</strong></p>
                            <p><strong> Charge utile  : {{$Contrat->charge_utile }}</strong></p>
                            <p><strong> Zone géographique  : {{$Contrat->zone_geographique }}</strong></p>
                          
                          
                        
                         
                            
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->
                @endforeach
            </div>
        </div>
  
    </section>
    <!-- ***** Team End ***** -->
<!-- </div> -->




@endsection
