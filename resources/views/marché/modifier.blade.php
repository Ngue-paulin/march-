@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-20 justify expand-block">
        <div class="card">
            <div class="card-header">{{ __('Modifier Une Information') }}</div>
            <div class="col-md-10 col-form-label text-md-right mb-4" style="color: cyan"><h3>Remplissez Correctement Les Informations Suivantes!!!</h3></div>
            <div class="card-body">
                <form method="POST" action="{{ route('marches.update' , $marché) }} " novalidate>
                    {{csrf_field()}}
                    {{ method_field('PUT')}}
                    <div class="row justify-content">
                        <div  class="form-group slot-start col-md-6 align-left">
                                <div class="form-group row has-error">
                                        <label class="col-md-4 col-form-label text-md-right" style="color: blue" for="reference" >{{ __('La Référence du marché') }}</label>
                                        <div class="input-field col s5">
                                             <input name="reference" id="reference" type="text" class="form-control validate"  value="{{ old('reference') ?? $marché->reference}}" required="required" autocomplete="reference" autofocus>
                                             {!! $errors->first('reference', '<span style="color: red" class="help-block" >:message</span>') !!}
                                        </div>
                                </div>
                    
                                <div class="form-group row">
                                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="secteur_marche" >{{ __('Le Secteur du marché') }}</label>
                                        <div class="input-field col s5">
                                             <input name="secteur_marche" id="secteur_marche" type="text" class="form-control validate" value="{{ old('secteur_marche') ?? $marché->secteur_marche}}"  required="required" autocomplete="secteur_marche"  autofocus>
                    
                                             {!! $errors->first('secteur_marche', '<span style="color: red" class="help-block" >:message</span>') !!}
                                        </div>
                                </div>
                    
                                <div class="form-group row">
                                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="date_debut" >{{ __('Date Début') }}</label>
                                        <div class="input-field col s5">
                                             <input name="date_debut" id="date_debut" type="date" class="form-control" value="{{ old('date_debut') ?? $marché->date_debut }}" required="required" autocomplete="date_debut" autofocus>
                                            {!! $errors->first('date_debut', '<span style="color: red" class="help-block" >:message</span>') !!}
                                        </div>
                                </div>
                    
                                <div class="form-group row">
                                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="date_fin" >{{ __('Date Fin') }}</label>
                                        <div class="input-field col s5">
                                             <input id="date_fin" type="date" class="form-control validate" name="date_fin" value="{{ old('date_fin') ?? $marché->date_debut }}" required="required" autocomplete="date_fin" autofocus>
                    
                                             {!! $errors->first('date_fin', '<span style="color: red" class="help-block" >:message</span>') !!}
                                        </div>
                                </div>
                    
                               <div class="form-group row">
                                    <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="statut" >{{ __('Statut') }}</label>
                                    <div class="input-field col s5">
                                         <input id="statut" type="text" class="form-control validate @error('statut') is-invalid @enderror" name="statut" value="{{ old('statut') ?? $marché->statut }}" required="required" autocomplete="statut" autofocus>
                    
                                         {!! $errors->first('statut', '<span style="color: red" class="help-block" >:message</span>') !!}
                                    </div>
                               </div>
                    
                               <div class="form-group row">
                                    <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="type_marche" >{{ __('Type de Marché') }}</label>
                                    <div class="input-field col s5">
                                         <input id="type_marche" type="text" class="form-control validate" name="type_marche" value="{{ old('type_marche') ?? $marché->type_marche }}" required="required" autocomplete="type_marche" autofocus>
                    
                                         {!! $errors->first('type_marche', '<span style="color: red" class="help-block" >:message</span>') !!}
                                    </div>
                               </div>
                    
                               <div class="form-group row">
                                    <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="montant" >{{ __('Montant Du Marché') }}</label>
                                    <div class="input-field col s5">
                                         <input id="montant" type="text" class="form-control validate" name="montant" value="{{ old('montant') ?? $marché->montant }}" required="required" autocomplete="montant" autofocus>
                    
                                         {!! $errors->first('montant', '<span style="color: red" class="help-block" >:message</span>') !!}
                                    </div>
                                </div>
                    
                         </div>
                         <div  class="form-group slot-end col-md-6 align-right">
                                    <div class="form-group row has-error">
                                            <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="delai_livreson" >{{ __('Delai De Livréson') }}</label>
                                            <div class="input-field col s5">
                                                 <input name="delai_livreson" id="delai_livreson" type="text" class="form-control validate"  value="{{ old('delai_livreson') ?? $marché->delai_livreson }}" required="required" autocomplete="reference" autofocus>
                    
                                                 {!! $errors->first('delai_livreson', '<span style="color: red" class="help-block" >:message</span>') !!}
                                            </div>
                                    </div>
                    
                                    <div class="form-group row">
                                            <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="lieu_livreson" >{{ __('Lieu De Livreson') }}</label>
                                            <div class="input-field col s5">
                                            <input name="lieu_livreson" id="lieu_livreson" type="text" class="form-control validate" value="{{ old('lieu_livreson') ?? $marché->lieu_livreson}}" required="required" autocomplete="lieu_livreson"  autofocus>
                    
                                                 {!! $errors->first('lieu_livreson', '<span style="color: red" class="help-block" >:message</span>') !!}
                                            </div>
                                    </div>
                    
                                    <div class="form-group row">
                                            <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="financement" >{{ __('Financement') }}</label>
                                            <div class="input-field col s5">
                                                 <input name="financement" id="financement" type="text" class="form-control" value="{{ old('financement') ?? $marché->financement }}" required="required" autocomplete="financement" autofocus>
                    
                                                 {!! $errors->first('financement', '<span style="color: red" class="help-block" >:message</span>') !!}
                                            </div>
                                    </div>
                    
                                    <div class="form-group row">
                                            <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="imputation" >{{ __('Imputation') }}</label>
                                            <div class="input-field col s5">
                                                 <input id="imputation" type="text" class="form-control validate" name="imputation" value="{{ old('imputation') ?? $marché->imputation }}" required="required" autocomplete="imputation" autofocus>
                    
                                                 {!! $errors->first('imputation', '<span style="color: red" class="help-block" >:message</span>') !!}
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="date_livréson" >{{ __('Date de Livraison') }}</label>
                                            <div class="input-field col s5">
                                                <input id="date_livréson" type="date" class="form-control" name="date_livréson" value="{{ old('date_livréson') ?? $marché->date_livréson }}" required="required" autocomplete="date_livréson">
                    
                                                {!! $errors->first('date_livréson', '<span style="color: red" class="help-block" >:message</span>') !!}
                                            </div>
                                        </div>
                    
                                        <div class="form-group row">
                                                <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="maitre_oeuvre">{{ __('Le Maître_Ouevre') }}</label>
                                            <div class="input-field col s5">
                                                 <input id="maitre_oeuvre" type="text" class="form-control validate" name="maitre_oeuvre" value="{{ old('maitre_oeuvre') ?? $marché->maitre_oeuvre }}" required="required" autocomplete="maitre_oeuvre">
                    
                                                 {!! $errors->first('maitre_oeuvre', '<span style="color: red" class="help-block btn-denger"  >:message</span>') !!}
                                            </div>
                                        </div>
                    
                                        <div class="form-group row">
                                                <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="user_id" >{{ __('Le Responsable') }}</label>
                                            <div class="input-field col s12 m6">
                                                    <select id="user_id" type="text" class="form-control validate" name="user_id" value="{{ old('user_id') ?? $marché->user_id }}" required="required">
                                                            @foreach($users as $u)
                                                            <option  value="{{ $u->id }}">{{ $u->name }}</option>
                                                            @endforeach
                                                    </select>
                                                 {!! $errors->first('user_id', '<span style="color: red" class="help-block" >:message</span>') !!}
                                            </div>
                                        </div>
                    
                        </div>
                        <div class="form-group row expand-block col-md-12 s12 m9">
                                <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="description" >{{ __(' Description') }}</label>
                                <div class="input-field col s12 m9">
                                    <textarea id="description" type="text" class="form-control validate materialize-textarea" name="description" value="{{ old('description') ?? $marché->description }}" required="required" autocomplete="description" autofocus></textarea>
                    
                                     {!! $errors->first('user_id', '<spanstyle="color: red" class="help-block" >:message</span>') !!}
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
                    
</div>
@endsection

