@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->

<section class="page">
    

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Inscrit toi !</h2>
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
                          
                                <form method="POST" action="{{ route('register') }}">
                                        @csrf
                               <div class="row">          
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" placeholder="Pseudo" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                         @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                     <div class="col-lg-6 col-md-12 col-sm-12">
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
                                        <input type="password"  name="password_confirmation"  placeholder="Confirmez votre Mot de passe" required/>
                                    </div>
                                       

                                </div>
                                <div class="col-lg-12">
                                    <button class="btn-primary-line">Inscription</button>
                                </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
    </section>





<!-- </div> -->
@endsection
