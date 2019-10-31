<div class="row justify-content">
    <div  class="form-group slot-start col-md-6 align-left">
            <div class="form-group row has-error">
                    <label class="col-md-4 col-form-label text-md-right" style="color: blue" for="reference" >{{ __('La Référence du marché') }}</label>
                    <div class="input-field col s5">
                         <input name="reference" id="reference" type="text" class="form-control validate"  value="{{$marché->reference}}" required="required" autocomplete="reference" autofocus>
                         {!! $errors->first('reference', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
            </div>

            <div class="form-group row">
                    <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="secteur_marche" >{{ __('Le Secteur du marché') }}</label>
                    <div class="input-field col s5">
                         <input name="secteur_marche" id="secteur_marche" type="text" class="form-control validate" value="{{$marché->secteur_marche}}"  required="required" autocomplete="secteur_marche"  autofocus>

                         {!! $errors->first('secteur_marche', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
            </div>

            <div class="form-group row">
                    <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="date_debut" >{{ __('Date Début') }}</label>
                    <div class="input-field col s5">
                         <input name="date_debut" id="date_debut" type="date" class="form-control" value="{{$marché->date_debut }}" required="required" autocomplete="date_debut" autofocus>
                        {!! $errors->first('date_debut', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
            </div>

            <div class="form-group row">
                    <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="date_fin" >{{ __('Date Fin') }}</label>
                    <div class="input-field col s5">
                         <input id="date_fin" type="date" class="form-control validate" name="date_fin" value="{{$marché->date_debut }}" required="required" autocomplete="date_fin" autofocus>

                         {!! $errors->first('date_fin', '<span style="color: red" class="help-block" >:message</span>') !!}
                    </div>
            </div>

           <div class="form-group row">
                <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="statut" >{{ __('Statut') }}</label>
                <div class="input-field col s5">
                     <input id="statut" type="text" class="form-control validate @error('statut') is-invalid @enderror" name="statut" value="{{$marché->statut }}" required="required" autocomplete="statut" autofocus>

                     {!! $errors->first('statut', '<span style="color: red" class="help-block" >:message</span>') !!}
                </div>
           </div>

           <div class="form-group row">
                <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="type_marche" >{{ __('Type de Marché') }}</label>
                <div class="input-field col s5">
                     <input id="type_marche" type="text" class="form-control validate" name="type_marche" value="{{$marché->type_marche }}" required="required" autocomplete="type_marche" autofocus>

                     {!! $errors->first('type_marche', '<span style="color: red" class="help-block" >:message</span>') !!}
                </div>
           </div>

           <div class="form-group row">
                <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="montant" >{{ __('Montant Du Marché') }}</label>
                <div class="input-field col s5">
                     <input id="montant" type="text" class="form-control validate" name="montant" value="{{$marché->montant }}" required="required" autocomplete="montant" autofocus>

                     {!! $errors->first('montant', '<span style="color: red" class="help-block" >:message</span>') !!}
                </div>
            </div>

     </div>
     <div  class="form-group slot-end col-md-6 align-right">
                <div class="form-group row has-error">
                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="delai_livreson" >{{ __('Delai De Livréson') }}</label>
                        <div class="input-field col s5">
                             <input name="delai_livreson" id="delai_livreson" type="text" class="form-control validate"  value="{{$marché->delai_livreson }}" required="required" autocomplete="reference" autofocus>

                             {!! $errors->first('delai_livreson', '<span style="color: red" class="help-block" >:message</span>') !!}
                        </div>
                </div>

                <div class="form-group row">
                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="lieu_livreson" >{{ __('Lieu De Livreson') }}</label>
                        <div class="input-field col s5">
                        <input name="lieu_livreson" id="lieu_livreson" type="text" class="form-control validate" value="{{$marché->lieu_livreson}}" required="required" autocomplete="lieu_livreson"  autofocus>

                             {!! $errors->first('lieu_livreson', '<span style="color: red" class="help-block" >:message</span>') !!}
                        </div>
                </div>

                <div class="form-group row">
                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="financement" >{{ __('Financement') }}</label>
                        <div class="input-field col s5">
                             <input name="financement" id="financement" type="text" class="form-control" value="{{$marché->financement }}" required="required" autocomplete="financement" autofocus>

                             {!! $errors->first('financement', '<span style="color: red" class="help-block" >:message</span>') !!}
                        </div>
                </div>

                <div class="form-group row">
                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="imputation" >{{ __('Imputation') }}</label>
                        <div class="input-field col s5">
                             <input id="imputation" type="text" class="form-control validate" name="imputation" value="{{$marché->imputation }}" required="required" autocomplete="imputation" autofocus>

                             {!! $errors->first('imputation', '<span style="color: red" class="help-block" >:message</span>') !!}
                        </div>
                </div>
                <div class="form-group row">
                        <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="date_livréson" >{{ __('Date de Livraison') }}</label>
                        <div class="input-field col s5">
                            <input id="date_livréson" type="date" class="form-control" name="date_livréson" value="{{$marché->date_livréson }}" required="required" autocomplete="date_livréson">

                            {!! $errors->first('date_livréson', '<span style="color: red" class="help-block" >:message</span>') !!}
                        </div>
                    </div>

                    <div class="form-group row">
                            <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="maitre_oeuvre">{{ __('Le Maître_Ouevre') }}</label>
                        <div class="input-field col s5">
                             <input id="maitre_oeuvre" type="text" class="form-control validate" name="maitre_oeuvre" value="{{$marché->maitre_oeuvre }}" required="required" autocomplete="maitre_oeuvre">

                             {!! $errors->first('maitre_oeuvre', '<span style="color: red" class="help-block btn-denger"  >:message</span>') !!}
                        </div>
                    </div>

                    <div class="form-group row">
                            <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="user_id" >{{ __('Le Responsable') }}</label>
                        <div class="input-field col s12 m6">
                                <select id="user_id" type="text" class="form-control validate" name="user_id" value="{{$marché->user_id }}" required="required">
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
                <textarea id="description" type="text" class="form-control validate materialize-textarea" name="description" value="{{$marché->description }}" required="required" autocomplete="description" autofocus></textarea>

                 {!! $errors->first('user_id', '<spanstyle="color: red" class="help-block" >:message</span>') !!}
            </div>
    </div>
</div>
