@extends('layouts.app')

@section('content')




<section class="page">
    

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Assure ton véhicule !</h2>
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
                          
                                <form method="POST" action="{{ route('ObjetAssurer_Auto.store') }}">
                                        @csrf
                              
                                <div class="row"> 

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Identité du vehicule</strong>
                                        </span>
                                        <input type="text" placeholder="identité du vehicule" class="form-control{{ $errors->has('identité_du_vehicule') ? ' is-invalid' : '' }}" name="identité_du_vehicule" >
                                        @if ($errors->has('identité_du_vehicule'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('identité_du_vehicule') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                      <div class="col-lg-6 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Description du proprietaire</strong>
                                        </span>
                                        <input type="text" placeholder="Description du proprietaire" class="form-control{{ $errors->has('description_du_proprietaire') ? ' is-invalid' : '' }}" name="description_du_proprietaire" >
                                        @if ($errors->has('description_du_proprietaire'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description_du_proprietaire') }}</strong>
                                        </span>
                                         @endif
                                    </div>


                                </div>

                                 <div class="row">   


                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Descrition du vehicule</strong>
                                        </span>
                                          <textarea  cols="30" rows="10" placeholder="descrition du vehicule" class="form-control{{ $errors->has('descrition_du_vehicule') ? ' is-invalid' : '' }}" name="descrition_du_vehicule" value="{{ old('descrition_du_vehicule') }}"></textarea>
                                            
                                              @if ($errors->has('descrition_du_vehicule'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('descrition_du_vehicule') }}</strong>
                                            </span>
                                            @endif
                                    </div>
                                </div>

                              
                                                    <input type="hidden" value="{{$Contrat_Auto->id}}" name="contrat__autos_id">                
                                <input type="hidden" name="users_id" value="{{Auth::user()->id}}" class="form-control{{ $errors->has('users_id') ? ' is-invalid' : '' }}" name="users_id" 
                                        readonly="readonly">
                                        @if ($errors->has('users_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('users_id') }}</strong>
                                        </span>
                                         @endif
                               <br>
                                <div class="col-lg-12">
                                    <button class="btn-primary-line">Assurer</button>
                                     
                                </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
    </section>



@endsection
