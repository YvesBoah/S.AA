@extends('layouts.app')

@section('content')




<section class="page">
    

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Mets à Jour ton Profil !</h2>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="contact-form">
                          
                            <form action="{{route('Profil.update',$user)}}" method="POST" enctype="multipart/form-data">
                                     {{ method_field('PUT') }}
                               {{csrf_field()}}
                           <input type="hidden" name="_method" value="PUT">

                                <div class="row">  


                                  
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Votre Pseudo</strong>
                                        </span>
                                         <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="fullname" name="name" value="{{ $user->name }}" />
                                          @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                         @endif
                                    </div> 

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Votre email</strong>
                                        </span>
                                         <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" id="fullname" name="email" value="{{ $user->email }}" />
                                          @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                         @endif
                                    </div> 


                              
                                                                    
                                </div>
                                                        <br>
                                 


                                <div class="row">  

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Votre telephone</strong>
                                        </span>
                                         <input class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" type="number" id="fullname" name="telephone" value="{{ $user->telephone }}" />
                                          @if ($errors->has('telephone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telephone') }}</strong>
                                        </span>
                                         @endif
                                    </div> 

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Votre Mot de passe</strong>
                                        </span>
                                         <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" id="fullname" name="password" value="{{ $user->password }}" />
                                          @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                         @endif
                                    </div> 
                                     
                                </div>
                                                   
                               <input type="hidden" name="role" value="{{$user->role}}">
                               <br>
                                <div class="col-lg-12">
                                    <button class="btn-primary-line">Mettre à jour</button>
                                     
                                </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
    </section>



@endsection




</body>
</html>