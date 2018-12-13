@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<!-- <div class="container-fluid"> -->
    <!-- ***** Team Start ***** -->
    <section class="section padding-top-80" id="our-team">
        <!-- <div class="container"> -->
            @if(count($SouscriptionAutos)>0)
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Liste des souscriptions automobiles !</h2>
                    </div>
                </div>
               
            </div>
            <!-- ***** Section Title End ***** -->

        <div class="row">
            <div class="col-lg-12">
                
                @foreach($SouscriptionAutos as $SouscriptionAuto)
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-4 offset-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="user-image">
                            <img src="{{ asset('assets/images/photos/team/1.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="user-name text-muted"><strong>Non du client : {{$SouscriptionAuto->nom_client}}</strong></h4>
                            <p class="user-name text-muted"><strong>Numero de la carte grise : {{$SouscriptionAuto->numero_carte_grise}}</strong></p>
                            <p><strong>Numero de permis de conduire : {{$SouscriptionAuto->numero_permis_de_conduire}}</strong></p>
                            <p> <strong>Numero de la visite technique : {{$SouscriptionAuto->numero_visite_technique}}</strong></p>
                            <p> <strong>Telephone : {{$SouscriptionAuto->telephone}}</strong></p>
                            <p> <strong>Mode de paiement : {{$SouscriptionAuto->mode_paiement}}</strong></p>
                          
                            <p>   <strong>Souscription effectué le : {{$SouscriptionAuto->created_at}}</strong></p>
                            <p></p>
  
                         
                            
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
  @else
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title text-danger">Vous n'avez Pas encore souscrit à un forfait Automobile !</h2>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <div class="center-text">
                            <p>Pour plus d'informations appellez nous au 00 00 00 00 ...</p>
                        </div>
                    </div>
                </div>
            @endif



@endsection
