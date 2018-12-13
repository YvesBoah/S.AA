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
                        <h2 class="section-title">Apercu de la fiche Client</h2>
                    </div>
                </div>
               
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-4 offset-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="user-image">
                            <img src="{{ asset('assets/images/photos/team/1.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="user-name text-muted"><strong>Nom : {{$Client->nom}}</strong></h4>
                            <p><strong>Prenom : {{$Client->prenom}}</strong></p>
                            <p> <strong>Telephone : {{$Client->telephone}}</strong></p>
                            <p><strong>Ville : {{$Client->ville}}</strong></p>
                            <p><strong>Statut : {{$Client->statut}}</strong></p>
                            <p>  <strong> Date de naissance : {{$Client->date_de_naissance}}</strong></p>
                            <p> <strong> Code de l'agence : {{$Client->code_agence}}</strong></p>
                            <p>   <strong>Votre numéro client est le : {{$Client->numero_client}}</strong></p>
                            <p></p>
  
                            <ul class="social">
                                <li><a href="Client/{{$Client->id}}/edit"><i class="fa fa-edit"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ***** Team Item End ***** -->
                
       
        </div>
  
    </section>
    <!-- ***** Team End ***** -->
<!-- </div> -->




@endsection
