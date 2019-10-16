@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card justify-content-left">
            <div class="card-header">{{ __('ENREGISTREMENT UTILISATEURS') }}</div>
        <div class="col-md-11 col-form-label text-md-right mb-4">
            <span style="color: cyan"><h4> Remplissez Correctement Les Informations Suivantes!!! </h4></span>
         </div>
        <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label style="color:blue" class="col-md-4 col-form-label text-md-right" for="name" >{{ __('Nom Complet') }}</label>
                            <div class="input-field col s5">
                                 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                    <label style="color:blue" class="col-md-4 col-form-label text-md-right" for="email" >{{ __('E-Mail Address') }}</label>
                            <div class="input-field col s5">
                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                    <label style="color:blue" class="col-md-4 col-form-label text-md-right" for="tel" >{{ __('Numéro de Téléphone') }}</label>
                            <div class="input-field col s5">
                                 <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>
                                 </div>
                            @error('tel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                    <label style="color:blue" class="col-md-4 col-form-label text-md-right" for="fonction" >{{ __('Votre Fonction') }}</label>
                        <div class="input-field col s5">
                             <input id="fonction" type="text" class="form-control @error('fonction') is-invalid @enderror" name="fonction" value="{{ old('fonction') }}" required autocomplete="fonction" autofocus>
                        </div>
                        @error('fonction')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                <label style="color:blue" class="col-md-4 col-form-label text-md-right" for="departement" >{{ __('Votre Département') }}</label>
                    <div class="input-field col s5">
                         <input id="departement" type="text" class="form-control @error('departement') is-invalid @enderror" name="departement" value="{{ old('departement') }}" required autocomplete="departement" autofocus>
                    </div>
                    @error('departement')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group row">
              <label style="color:blue" class="col-md-4 col-form-label text-md-right" for="section" >{{ __('Votre Section') }}</label>
                <div class="input-field col s5">
                     <input id="section" type="text" class="form-control @error('section') is-invalid @enderror" name="section" value="{{ old('section') }}" required autocomplete="section" autofocus>
                </div>
                @error('section')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
                    <div class="form-group row">
                     <label style="color:blue" class="col-md-4 col-form-label text-md-right" for="cni" >{{ __('N° de Cni') }}</label>
                            <div class="input-field col s5">
                                 <input id="cni" type="text" class="form-control @error('cni') is-invalid @enderror" name="cni" value="{{ old('cni') }}" required autocomplete="cni" autofocus>
                            </div>
                            @error('cni')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="row justify-content">
                    <div class="form-group row col-md-6 align-righ">
                       <label style="color:blue" class="col-md-4 col-form-label text-md-right" for="password" >{{ __('Mot de passe') }}</label>
                            <div class="input-field col s4">
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row col-md-6 align-righ">
                    <label style="color:blue" class="col-md-4 col-form-label text-md-right" for="password-confirm" >{{ __('Confirm Password') }}</label>
                        <div class="input-field col s4">
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>


                    <div class="row justify-content">
                            <div  class="form-group row mb-0 slot-start col-md-4 align-left">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Enrégistrer') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row mb-0 col-md-4 align-right">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="reset" class="btn btn-primary">
                                                {{ __('Annuler') }}
                                            </button>
                                        </div>
                                </div>
                    </div>
                    </form>

</div>
@endsection
