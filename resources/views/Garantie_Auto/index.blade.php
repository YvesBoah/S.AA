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
                        <h2 class="section-title">Détail des garanties appliqué au véhicule !</h2>
                    </div>
                </div>
               
            </div>
            <!-- ***** Section Title End ***** -->

        <div class="row">
            <div class="col-lg-12">
                @foreach($garantie_Auto as $garantie_Automobile)
                <!-- ***** Team Item Start ***** -->
                <div class="col-lg-4 offset-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="user-image">
                            <img src="{{ asset('assets/images/photos/team/1.jpg') }}" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="user-name text-muted"><strong>Garantie : {{$garantie_Automobile->garantie}}</strong></h4>
                            <p><strong>Identité du vehicule : {{$garantie_Automobile->identité_du_vehicule}}</strong></p>
                          
                          
                        
                         
                            
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
