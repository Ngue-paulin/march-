@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-20 justify expand-block">
        <div class="card">
            <div class="card-header"><h3>{{ __('Attribuer Un Marché') }}</h3></div>
        <div class="col-md-12 col-form-label text-md-right mb-2 " style="color: cyan"><h3 class="text-center font-weight-bold text-uppercase py-4">Attribuer un Marché à un Prestataire</h3></div>
            <div class="card-body">
                <form method="POST" action="{{ route('attributions.store') }} " novalidate>
                    {{csrf_field()}}

        <div class="row justify-content">
            <div  class="form-group slot-start col-md-6 align-left">
                <div class="form-group row">
                       <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="marche_id" >{{ __('Marché') }}</label>
                    <div class="input-field col s12 m6">
                        <select id="marche_id" type="text" class="form-control validate @error('marche_id') is-invalid @enderror" name="marche_id" value="{{ old('marche_id') }}" required="required">
                            @foreach($marché as $mar)
                            <option  value="{{ $mar->id }}">{{ $mar->reference }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('marche_id', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
                </div>

                <div class="form-group row">
                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="prestataire_id" >{{ __('Prestataire') }}</label>
                    <div class="input-field col s12 m6">
                        <select id="prestataire_id" type="text" class="form-control validate @error('prestataire_id') is-invalid @enderror" name="prestataire_id" value="{{ old('prestataire_id') }}" required="required">
                            @foreach($prestataire as $prest)
                            <option  value="{{ $prest->id }}">{{ $prest->entreprise }}</option>
                            @endforeach
                        </select>
                         {!! $errors->first('prestataire_id', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
                </div>
                <div class="form-group row">
                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="user_id" >{{ __('Le Controleur') }}</label>
                    <div class="input-field col s12 m6">
                        <select id="user_id" type="text" class="form-control validate" name="user_id" value="{{ old('user_id') }}" required="required">
                             @foreach($users as $u)
                             <option  value="{{ $u->id }}">{{ $u->name }}</option>
                             @endforeach
                        </select>
                         {!! $errors->first('user_id', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
                </div>


            </div>
            <div  class="form-group slot-end col-md-6 align-right">


                <div class="form-group row">
                            <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="delai_livreson" >{{ __('Delai de Livraison') }}</label>
                    <div class="input-field col s5">
                           <input id="delai_livreson" type="text" class="form-control" name="delai_livreson" required="required" autocomplete="delai_livreson">

                           {!! $errors->first('delai_livreson', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
                </div>
                <div class="form-group row">
                            <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="date_livréson" >{{ __('Date de Livraison') }}</label>
                    <div class="input-field col s5">
                           <input id="date_livréson" type="date" class="form-control" name="date_livréson" required="required" autocomplete="date_livréson">

                          {!! $errors->first('date_livréson', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
                </div>

                <div class="form-group row">
                           <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="lieu_livreson" >{{ __('Lieu de Livraison') }}</label>
                    <div class="input-field col s5">
                          <input id="lieu_livreson" type="text" class="form-control" name="lieu_livreson" required="required" autocomplete="lieu_livreson">

                          {!! $errors->first('lieu_livreson', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
                </div>

            </div>

        </div>
                    <div class="row justify-content">
                            <div  class="form-group slot-start col-md-6 align-left">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" >
                                            {{ __('Enrégistrer') }}
                                        </button>
                                    </div>
                            </div>

                            <div class="form-group col-md-6 align-right slot-end">
                                    <div class="col-md-6 offset-md-4">
                                            <button type="reset" class="btn btn-primary">
                                                {{ __('Annuler') }}
                                            </button>
                                    </div>
                            </div>
                    </div>
                </form>
</div>
</div>
</div>
</div>
@endsection
