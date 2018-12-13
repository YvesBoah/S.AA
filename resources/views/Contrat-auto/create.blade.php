@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->



<section class="page">
    

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="container">
             @if(count($Contrat_Auto)<=0)  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Créé ton premier contrat automobile !</h2>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <div class="center-text">
                            <p>Profite de nos abonnements à moindres coûts...</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="contact-form">
                          
                                <form method="POST" action="{{ route('Contrat-Auto.store') }}"  enctype="multipart/form-data">
                                        @csrf

                               <div class="row">     
                                          
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Carte grise</strong>
                                        </span>
                                        <input type="file" placeholder="carte grise" class="form-control{{ $errors->has('carte_grise') ? ' is-invalid' : '' }}" name="carte_grise" value="{{ old('carte_grise') }}"  autofocus>
                                         @if ($errors->has('carte_grise'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('carte_grise') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                        
                                     <div class="col-lg-4 col-md-12 col-sm-12">
                                          <span >
                                            <strong>Permis de conduire</strong>
                                        </span>
                                             <input type="file" placeholder="permis de conduire" class="form-control{{ $errors->has('permis_de_conduire') ? ' is-invalid' : '' }}" name="permis_de_conduire" value="{{ old('permis_de_conduire') }}" >
                                              @if ($errors->has('permis_de_conduire'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('permis_de_conduire') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                          <span>
                                            <strong>Visite technique</strong>
                                        </span>
                                             <input type="file" placeholder="visite technique" class="form-control{{ $errors->has('visite_technique') ? ' is-invalid' : '' }}" name="visite_technique" value="{{ old('visite_technique') }}" >
                                              @if ($errors->has('visite_technique'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('visite_technique') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                   
                                  
                                </div>
                            <!-- Seconde ligne -->
                                <div class="row">  

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                         <span>
                                            <strong>Marque de la voiture</strong>
                                        </span>
                                        <input type="text" placeholder="marque de la voiture" class="form-control{{ $errors->has('marque_de_voiture') ? ' is-invalid' : '' }}" name="marque_de_voiture" >
                                        @if ($errors->has('marque_de_voiture'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('marque_de_voiture') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                  
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                         <span>
                                            <strong>type</strong>
                                        </span>
                                        <input type="text" placeholder="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" >
                                        @if ($errors->has('type'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                         <span>
                                            <strong>puissance de la voiture</strong>
                                        </span>
                                        <input type="text" placeholder="puissance de la voiture" class="form-control{{ $errors->has('puissance') ? ' is-invalid' : '' }}" name="puissance" >
                                        @if ($errors->has('puissance'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('puissance') }}</strong>
                                        </span>
                                         @endif
                                    </div>



                                </div>

                                 <!-- Troisième ligne -->
                                <div class="row">  

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                         <span>
                                            <strong>immatriculation de la voiture</strong>
                                        </span>
                                        <input type="text" placeholder="immatriculation de la voiture" class="form-control{{ $errors->has('immatriculation') ? ' is-invalid' : '' }}" name="immatriculation" >
                                        @if ($errors->has('immatriculation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('immatriculation') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                  
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                         <span>
                                            <strong>carrosserie</strong>
                                        </span>
                                        <input type="text" placeholder="carrosserie" class="form-control{{ $errors->has('carrosserie') ? ' is-invalid' : '' }}" name="carrosserie" >
                                        @if ($errors->has('carrosserie'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('carrosserie') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                         <span>
                                            <strong>energie de la voiture</strong>
                                        </span>
                                        <input type="text" placeholder="energie de la voiture" class="form-control{{ $errors->has('energie') ? ' is-invalid' : '' }}" name="energie" >
                                        @if ($errors->has('energie'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('energie') }}</strong>
                                        </span>
                                         @endif
                                    </div>



                                </div>

                                 <!-- Quatrième ligne -->
                                <div class="row">  

                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                         <span>
                                            <strong>Valeur neuve de la voiture</strong>
                                        </span>
                                        <input type="number" placeholder="Valeur neuve de la voiture" class="form-control{{ $errors->has('valeur_neuve') ? ' is-invalid' : '' }}" name="valeur_neuve" >
                                        @if ($errors->has('valeur_neuve'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('valeur_neuve') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                  
                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                         <span>
                                            <strong>charge utile ou poids lourds</strong>
                                        </span>
                                        <input type="text" placeholder="charge utile" class="form-control{{ $errors->has('charge_utile') ? ' is-invalid' : '' }}" name="charge_utile" >
                                        @if ($errors->has('charge_utile'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('charge_utile') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                         <span>
                                            <strong>Zone géographique</strong>
                                        </span>
                                        <input type="text" placeholder="Zone geographique" class="form-control{{ $errors->has('zone_geographique') ? ' is-invalid' : '' }}" name="zone_geographique" >
                                        @if ($errors->has('zone_geographique'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('zone_geographique') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                     <div class="col-lg-3 col-md-12 col-sm-12">
                                         <span>
                                            <strong>Date de mise en circulation</strong>
                                        </span>
                                        <input type="date" placeholder="Date de premiere mise en circulation" class="form-control{{ $errors->has('date_premiere_circulation') ? ' is-invalid' : '' }}"  name="date_premiere_circulation">
                                        @if ($errors->has('date_premiere_circulation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_premiere_circulation') }}</strong>
                                        </span>
                                         @endif
                                    </div>



                                </div>



                                <input type="hidden" name="users_id" value="{{Auth::user()->id}}" class="form-control{{ $errors->has('users_id') ? ' is-invalid' : '' }}" name="users_id" 
                                        readonly="readonly">
                                        @if ($errors->has('users_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('users_id') }}</strong>
                                        </span>
                                         @endif
                                <div class="col-lg-12">
                                    <button class="btn-primary-line">Enregistrer</button>
                                </div>
                       
                        </div>
                    </div>
                </div>
            </div>

            @else
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title text-danger">Vous n'avez droit qu'a un seul contrat et la possibilité de le renouveler une fois qu'il est arrivé à échéance !</h2>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <div class="center-text">
                            <p>Pour plus d'informations appellez nous au 00 00 00 00 ...</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- ***** Page Content End ***** -->
    </section>





<!-- </div> -->
@endsection
