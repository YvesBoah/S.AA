@extends('layouts.app')

@section('content')




<section class="page">
    

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Réinitialise ton mot de passe !</h2>
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
                          
                                <form method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                               <div class="row">   


                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                             <input type="text" placeholder="E-Mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                              @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                    </div>

                                    
                                                                    
                                </div>
                                 <div class="row">   


                                  
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="password" placeholder="Mot de passe" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                         @endif
                                    </div>

                                       <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="password" placeholder="Confirmez votre Mot de passe" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password_confirmation" required>
                                        
                                    </div>
                                     
                                                                    
                                </div>
                               
                               
                                <div class="col-lg-12">
                                    <button class="btn-primary-line">Réinitialiser votre mot de passe </button>
                                    
                                </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
    </section>






@endsection
