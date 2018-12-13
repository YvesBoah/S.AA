{{--  @extends('layouts.header_footer') --}}
@extends('layouts.app')
@section('content')


<br>
<br>



<section class="page">
    

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="container">
             @if(count($Client))  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Mise à jourde  la fiche client !</h2>
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
                          
                                <form method="POST" action="{{ route('Client.update',$Client) }}"  enctype="multipart/form-data">
                                             {{ method_field('PUT') }}
                               {{csrf_field()}}
                           <input type="hidden" name="_method" value="PUT">

                               <div class="row">     
                                          
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Choisir une Agence</strong>
                                        </span>

                                         <select name="code_agence" class="form-control{{ $errors->has('code_agence') ? ' is-invalid' : '' }}" required="">
                                            <?php foreach ($Agence as $key => $value): ?>                             
                                            <option value="{{$key}}">{{$value}}</option>
                                             <?php endforeach ?>
                                        </select>     
                                        
                                         @if ($errors->has('code_agence'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('code_agence') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                        
                                     <div class="col-lg-4 col-md-12 col-sm-12">
                                          <span >
                                            <strong>Type de personnalité</strong>
                                        </span>
                                        <select name="statut" id="" class="form-control{{ $errors->has('statut') ? ' is-invalid' : '' }}" required="">
                                            <option value="Personne Morale" selected="selected">Personne Morale</option>
                                            <option value="Personne physique">Personne physique</option>
                                        </select>    
                                             
                                              @if ($errors->has('statut'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('statut') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                          <span>
                                            <strong>Votre nom</strong>
                                        </span>
                                             <input type="text" placeholder="Votre nom" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{$Client->nom}}" >
                                              @if ($errors->has('nom'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nom') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                   
                                  
                                </div>
                            <!-- Seconde ligne -->
                                <div class="row">  

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                          <span>
                                            <strong>Votre prénom</strong>
                                        </span>
                                             <input type="text" placeholder="Votre prénom" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{$Client->prenom}}" >
                                              @if ($errors->has('prenom'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('prenom') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                   

                                  
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                         <span>
                                            <strong>Telephone</strong>
                                        </span>
                                        <input type="number" placeholder="Telephone" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{$Client->telephone}}">
                                        @if ($errors->has('telephone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telephone') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                         <span>
                                            <strong>ville de résidence</strong>
                                        </span>
                                        <input type="text" placeholder="ville de résidence" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{$Client->ville}}">
                                        @if ($errors->has('ville'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ville') }}</strong>
                                        </span>
                                         @endif
                                    </div>



                                </div>

                                 <!-- Troisième ligne -->
                                <div class="row">  

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                         <span>
                                            <strong>Date de naissance</strong>
                                        </span>
                                        <input type="date" placeholder="Date de naissance" class="form-control{{ $errors->has('date_de_naissance') ? ' is-invalid' : '' }}" name="date_de_naissance" >
                                        @if ($errors->has('date_de_naissance'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_de_naissance') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                 
                                  
                                  


                                </div>
                           
                                <input type="hidden" name="rang" class="form-control{{ $errors->has('numero_client') ? ' is-invalid' : '' }}" value="{{$Client->numero_client}}">
                                
                                 <input type="hidden" name="users_id" value="{{Auth::user()->id}}" class="form-control{{ $errors->has('users_id') ? ' is-invalid' : '' }}" name="users_id" 
                                        readonly="readonly">
                                        @if ($errors->has('users_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('users_id') }}</strong>
                                        </span>
                                         @endif

                                <div class="col-lg-12">
                                    <button class="btn-primary-line"> Créer une fiche client</button>
                                </div>
                       
                        </div>
                    </div>
                </div>
            </div>

            @else
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title text-danger">Vous n'avez droit qu'a une seule fiche client et la possibilité de l'éditer !</h2>
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












                            <!-- create -->




@endsection