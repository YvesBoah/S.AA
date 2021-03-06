@extends('layouts.app')

@section('content')




<section class="page">
    

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Souscrit et rejoind nous !</h2>
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
                          
                                <form method="POST" action="{{ route('Souscription_GAV.store') }}">
                                        @csrf
                              
                                <div class="row"> 

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Activite du prospect</strong>
                                        </span>
                                        <input type="text" placeholder="Activite du prospect" class="form-control{{ $errors->has('activite_prospect') ? ' is-invalid' : '' }}" name="activite_prospect" >
                                        @if ($errors->has('activite_prospect'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('activite_prospect') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                      <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Age du prospect</strong>
                                        </span>
                                        <input type="number" placeholder="Age du prospect" class="form-control{{ $errors->has('age_prospect') ? ' is-invalid' : '' }}" name="age_prospect" >
                                        @if ($errors->has('age_prospect'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('age_prospect') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                     <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Montant du capital à garantir</strong>
                                        </span>
                                        <input type="number" placeholder="Montant du capital à garantir" class="form-control{{ $errors->has('montant_capital_a_garantir') ? ' is-invalid' : '' }}" name="montant_capital_a_garantir" >
                                        @if ($errors->has('montant_capital_a_garantir'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('montant_capital_a_garantir') }}</strong>
                                        </span>
                                         @endif
                                    </div>


                                </div>

                                 <div class="row">   


                                  <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Votre nom </strong>
                                        </span>
                                        <input type="text" placeholder="Votre nom" class="form-control{{ $errors->has('nom_client') ? ' is-invalid' : '' }}" name="nom_client" >
                                        @if ($errors->has('nom_client'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nom_client') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Votre telephone </strong>
                                        </span>
                                        <input type="text" placeholder="Votre telephone" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" >
                                        @if ($errors->has('telephone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telephone') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Mode de paiement </strong>
                                        </span>
                                        <select class="form-control{{ $errors->has('mode_paiement') ? ' is-invalid' : '' }}" name="mode_paiement" id="">
                                            <option value="MTN CI">MTN</option>
                                            <option value="ORANGE CI">ORANGE CI</option>
                                            <option value="MOOV CI">MOOV CI</option>
                                        </select>
                                        @if ($errors->has('mode_paiement'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mode_paiement') }}</strong>
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
                           
                               <br>
                                <div class="col-lg-12">
                                    <button class="btn-primary-line">Souscrire</button>
                                     
                                </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
    </section>



@endsection
