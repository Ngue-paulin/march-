@extends('layouts.app')

@section('content')

        <div class="card" >
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4" style="color: cyan">Liste Des Marchés</h3>
     <div class="card-body">
            @if(count($marché) > 0)
        <div id="table" class="table-editable">
<span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
        <table class="table table-borderless table-responsive-lg table-striped text-center">
            <thead class="thead-dark">
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Référence</th>
                <th class="text-center">Type</th>
                <th class="text-center">Montant</th>
                <th class="text-center">Description</th>
                <th class="text-center">Date Début</th>
                <th class="text-center">Date Fin</th>
                <th class="text-center">Maitre D'ouvrage</th>
                <th class="text-center">Statut</th>
                <th class="text-center">Détail</th>
                <th class="text-center">Changer Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marché as $marché)
            <tr>
                <td class="pt-3-half" contenteditable="true"><span class="badge @if($marché->statut == 'En Etude') badge-danger @else badge-success @endif ">{{ $marché->id }}</span></td>
                <td class="pt-3-half" contenteditable="true">{{ $marché->reference }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $marché->type_marche }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $marché->montant }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $marché->description }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $marché->date_debut }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $marché->date_fin }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $marché->maitre_oeuvre }}</td>
                <td class="pt-3-half" style="color: red" contenteditable="true"><span class="badge @if($marché->statut == 'En Etude') badge-danger @else badge-success @endif ">{{ $marché->statut }}</span></td>
                <td class="pt-3-half">
                <span class="table-up"><a href="{{ route('marches.show' , $marché) }}" ><button type="button"
                    class="btn btn-secondary btn-rounded btn-sm my-0 btn-lg btn-block"><i class="material-icons ">info</i></button></a></span>
                </td>
                <td>
                <a href="#oModal"><button type="button"
                        class="btn btn-primary btn-rounded btn-sm my-0 btn-lg btn-block" ><i class="material-icons ">edit</i></button></a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
     @else
        Aucun Marché pour le Moment !!!
     @endif
     <!-- modal -->

     <div id="oModal" class="oModal">
        <div class="scrollbox">
            <header style="color: red">
              <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
              <h2>Changer le Statut</h2>
            </header>
             <section style="overflow-wrap: scroll; ">
                <form method="POST" action="{{ route('marches.update' , $marché) }} " novalidate>
                    {{csrf_field()}}
                    {{ method_field('PUT')}}
                    <div class="row justify-content">
                           <div  class="form-group slot-start col-md-6 align-left">
                               <div class="form-group row">
                                     <label style="color: blue" class="col-md-4 col-form-label text-md-right" for="statut" >{{ __('Statut') }}</label>
                                     <div class="input-field col s5">
                                             <input id="statut" type="text" class="form-control validate @error('statut') is-invalid @enderror" name="statut" value="{{ old('statut') ?? $marché->statut }}" required="required" autocomplete="statut" autofocus>

                                             {!! $errors->first('statut', '<span style="color: red" class="help-block" >:message</span>') !!}
                                     </div>
                                </div>
                          </div>

                    <div class="row justify-content">
                    <div class="form-group row has-error">
                                <label class="col-md-4 col-form-label text-md-right hi" style="color: blue" for="reference" >{{ __('La Référence du marché') }}</label>
                                <div class="input-field col s5">
                                     <input name="reference" id="reference" type="text" class="hidden form-control validate"  value="{{ old('reference') ?? $marché->reference}}" required="required" autocomplete="reference" autofocus>
                                     {!! $errors->first('reference', '<span style="color: red" class="help-block" >:message</span>') !!}
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



             </section>
             <footer class="cf">
             <a href="#fermer" class="btn droite" title="Fermer la fenêtre">Fermer</a>
             </footer>
        </div>
    </div>

@endsection



