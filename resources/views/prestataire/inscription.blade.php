@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-20 justify expand-block">
        <div class="card">
            <div class="card-header"><h3>{{ __('Renseignement Sur Le Prestataire') }}</h3></div>
               <div class="col-md-9 col-form-label text-md-right mb-4">
                  <span style="color: cyan"><h4> Entrer Les Informations Correctes Sur Le Prestataire </h4></span>
               </div>
               <div></div>
            <div class="card-body">
                <form method="POST" action="{{ route('prestataires.store') }} " novalidate>
                    {{csrf_field()}}

           <div class="row justify-content">
            <div  class="form-group slot-start col-md-6 align-left">
                    <div class="form-group row has-error">
                            <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="nom" >{{ __('Nom complet') }}</label>
                            <div class="input-field col s5">
                                 <input name="nom" id="nom" type="text" class="form-control validate"  value="{{ old('nom') }}" required="required" autocomplete="reference" autofocus>
                                 {!! $errors->first('nom', '<span style="color: red" class="help-block" >:message</span>') !!}
                            </div>
                    </div>
                    <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="statut_juridique" >{{ __('Statut Juridique') }}</label>
                                <div class="input-field col s12 m6">
                                        <select name="statut_juridique" id="statut_juridique" type="text" class="form-control validate" required="required" autocomplete="statut_juridique"  autofocus>
                                                <option  value="Personne Physique"><button class="btn-success">Personne Physique</button></option>
                                                <option  value="Personne Morale"><button class="btn-success">Personne Morale</button></option>
                                        </select>
                                     {!! $errors->first('user_id', '<span style="color: red" class="help-block" >:message</span>') !!}
                                </div>
                            </div>

                    <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="entreprise" >{{ __('Nom Entreprise') }}</label>
                            <div class="input-field col s5">
                                 <input name="entreprise" id="entreprise" type="text" class="form-control" value="{{ old('entreprise') }}" required="required" autocomplete="entreprise" autofocus>
                                {!! $errors->first('entreprise', '<span style="color: red" class="help-block" >:message</span>') !!}
                            </div>
                    </div>

                    <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="responsable" >{{ __('Responsable') }}</label>
                            <div class="input-field col s5">
                                 <input id="responsable" type="text" class="form-control validate" name="responsable" value="{{ old('responsable') }}" required="required" autocomplete="responsable" autofocus>

                                 {!! $errors->first('responsable', '<span style="color: red" class="help-block" >:message</span>') !!}
                            </div>
                    </div>

                   <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="profession" >{{ __('Profession') }}</label>
                        <div class="input-field col s5">
                             <input id="profession" type="text" class="form-control validate @error('profession') is-invalid @enderror" name="profession" value="{{ old('profession') }}" required="required" autocomplete="profession" autofocus>

                             {!! $errors->first('profession', '<span style="color: red" class="help-block" >:message</span>') !!}
                        </div>
                   </div>

                   <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="secteur_activite" >{{ __('Secteur Activité') }}</label>
                        <div class="input-field col s5">
                             <input id="secteur_activite" type="text" class="form-control validate" name="secteur_activite" value="{{ old('secteur_activite') }}" required="required" autocomplete="secteur_activite" autofocus>

                             {!! $errors->first('secteur_activite', '<span style="color: red" class="help-block" >:message</span>') !!}
                        </div>
                   </div>

                   <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="tel" >{{ __('N° Tel') }}</label>
                        <div class="input-field col s5">
                             <input id="tel" type="text" class="form-control validate" name="tel" value="{{ old('tel') }}" required="required" autocomplete="tel" autofocus>

                             {!! $errors->first('tel', '<span style="color: red" class="help-block" >:message</span>') !!}
                        </div>
                    </div>

             </div>
             <div  class="form-group slot-end col-md-6 align-right">
                        <div class="form-group row has-error">
                                <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="email" >{{ __('Email') }}</label>
                                <div class="input-field col s5">
                                     <input name="email" id="email" type="text" class="form-control validate"  value="{{ old('email') }}" required="required" autocomplete="reference" autofocus>

                                     {!! $errors->first('email', '<span style="color: red" class="help-block" >:message</span>') !!}
                                </div>
                        </div>

                        <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="cni" >{{ __('N° cni') }}</label>
                                <div class="input-field col s5">
                                     <input name="cni" id="cni" type="text" class="form-control validate" required="required" autocomplete="cni"  autofocus>

                                     {!! $errors->first('cni', '<span style="color: red" class="help-block" >:message</span>') !!}
                                </div>
                        </div>

                        <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="ville" >{{ __('Ville') }}</label>
                                <div class="input-field col s5">
                                     <input name="ville" id="ville" type="text" class="form-control" value="{{ old('ville') }}" required="required" autocomplete="financement" autofocus>

                                     {!! $errors->first('ville', '<span style="color: red" class="help-block" >:message</span>') !!}
                                </div>
                        </div>

                        <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="boite_postale" >{{ __('Boite Postale') }}</label>
                                <div class="input-field col s5">
                                     <input id="boite_postale" type="text" class="form-control validate" name="boite_postale" value="{{ old('boite_postale') }}" required="required" autocomplete="boite_postale" autofocus>

                                     {!! $errors->first('boite_postale', '<span style="color: red" class="help-block" >:message</span>') !!}
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="numero_contrib" >{{ __('N° Contribuable') }}</label>
                                <div class="input-field col s5">
                                    <input id="numero_contrib" type="text" class="form-control" name="numero_contrib" required="required" autocomplete="numero_contrib">

                                    {!! $errors->first('numero_contrib', '<span style="color: red" class="help-block" >:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="numero_rg">{{ __('N° RG') }}</label>
                                <div class="input-field col s5">
                                     <input id="numero_rg" type="text" class="form-control validate" name="numero_rg" required="required" autocomplete="numero_rg">

                                     {!! $errors->first('numero_rg', '<span style="color: red" class="help-block btn-denger"  >:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="numero_compbanck">{{ __('N° Cpt Bancaire') }}</label>
                                <div class="input-field col s5">
                                     <input id="numero_compbanck" type="text" class="form-control validate" name="numero_compbanck" required="required" autocomplete="numero_compbanck">

                                     {!! $errors->first('numero_compbanck', '<span style="color: red" class="help-block btn-denger"  >:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" style="color:blue" for="banck">{{ __('Nom de la Banque') }}</label>
                                <div class="input-field col s5">
                                     <input id="banck" type="text" class="form-control validate" name="banck" required="required" autocomplete="banck">

                                     {!! $errors->first('banck', '<span style="color: red" class="help-block btn-denger"  >:message</span>') !!}
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
</div>
@endsection
