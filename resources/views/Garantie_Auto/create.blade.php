@extends('layouts.app')

@section('content')




<section class="page">
    

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Ajoute une garanite à ton véhicule !</h2>
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
                          
                                <form method="POST" action="{{ route('Garantie_Auto.store') }}">
                                        @csrf
                           

                                <div class="row">  


                                  
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Garantie (Obligatoire) 1</strong>
                                        </span>
                                        <select name="garanties_id[]" class="form-control" id="">
                                            <?php foreach ($Garantie_Obligatoire_1 as $key => $value): ?>
                                            <option value="{{$value->id}}">{{$value->garantie}}</option>
                                            <?php endforeach ?>
                                        </select>
                                    </div> 


                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Garantie (Obligatoire) 2</strong>
                                        </span>
                                       <select name="garanties_id[]" class="form-control" id="">
                                            <?php foreach ($Garantie_Obligatoire_2 as $key => $value): ?>
                                            <option value="{{$value->id}}">{{$value->garantie}}</option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Garantie (Obligatoire) 3</strong>
                                        </span>
                                       <select name="garanties_id[]" class="form-control" id="">
                                            <?php foreach ($Garantie_Obligatoire_3 as $key => $value): ?>
                                            <option value="{{$value->id}}">{{$value->garantie}}</option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                     
                                                                    
                                </div>
                                                        <br>
                                 <div class="row">  


   

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Garantie (Optionnelle)</strong>
                                        </span>
                                       <select name="garanties_id[]" class="form-control" >
                                            <option value="" selected="">Aucune Garantie</option>
                                            <?php foreach ($Garantie as $key => $value): ?>
                                            <option value="{{$value->id}}">{{$value->garantie}}</option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Garantie (Optionnelle)</strong>
                                        </span>
                                       <select name="garanties_id[]" class="form-control" >
                                            <option value="" selected="">Aucune Garantie</option>
                                            <?php foreach ($Garantie as $key => $value): ?>
                                            <option value="{{$value->id}}">{{$value->garantie}}</option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Garantie (Optionnelle)</strong>
                                        </span>
                                       <select name="garanties_id[]" class="form-control" >
                                          <option value="" selected="">Aucune Garantie</option>
                                            <?php foreach ($Garantie as $key => $value): ?>
                                            <option value="{{$value->id}}">{{$value->garantie}}</option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                     
                                </div> 




<br>

                                <div class="row">  

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Contrat Automobile</strong>
                                        </span>
                                       <select name="contrat__autos_id" class="form-control">
                                            <option selected value="{{$Contrat_Auto->id}}">{{$Contrat_Auto->immatriculation}}</option>
                                           
                                        </select>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <span>
                                            <strong>Choisir l'Objet à assurer</strong>
                                        </span>
                                       <select name="objet_assurers_id" class="form-control" >
                                            <?php foreach ($ObjetAssurer as $key => $value): ?>
                                            <option required value="{{$value->id}}">{{$value->identité_du_vehicule}}</option>
                                            <?php endforeach ?>
                                        </select>
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
                                    <button class="btn-primary-line">Garantire</button>
                                     
                                </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Content End ***** -->
    </section>



@endsection
