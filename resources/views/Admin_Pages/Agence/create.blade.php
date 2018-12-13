{{--  @extends('layouts.header_footer') --}}
@extends('layouts.app')

@section('content')

<br>
<br>



 <div class="card-body">
 	<h1 class="text-center"> Créer une agence </h1>
                    <form method="POST" action="{{ route('Agence-Admin.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="libelle_agence" class="col-sm-4 col-form-label text-md-right">Libelle Agence</label>

                            <div class="col-md-6">
                                <input id="libelle_agence" type="text" class="form-control{{ $errors->has('libelle_agence') ? ' is-invalid' : '' }}" name="libelle_agence" value="{{ old('libelle_agence') }}" required autofocus>

                                @if ($errors->has('libelle_agence'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('libelle_agence') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						

						<div class="form-group row">
                            <label for="code_agence" class="col-md-4 col-form-label text-md-right">Réseau Agence</label>

                            <div class="col-md-6">
                               
								<select name="reseau" id="" class="form-control" required="">
									<option value="1" selected="selected">BUREAUX DIRECTS</option>
									<option value="2">COURTIERS</option>
									<option value="3">AGENTS GENERAUX</option>
									<option value="4">KAM</option>
									<option value="5">APPORTEURS DIVERS</option>
									<option value="6">CASH EXPRESS</option>
									<option value="7">AGENCES DE VOYAGE</option>
									<option value="8">TRANSITAIRES</option>
									<option value="9">SAGACI</option>
								</select>						
                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="code_agence" class="col-md-4 col-form-label text-md-right">Position Agence</label>

                            <div class="col-md-6">
                                <input id="code_agence" type="text" class="form-control{{ $errors->has('code_agence') ? ' is-invalid' : '' }}" name="code_agence" required>

                                @if ($errors->has('code_agence'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code_agence') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						

                    

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    Créer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>





@endsection