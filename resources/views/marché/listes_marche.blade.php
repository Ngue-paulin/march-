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
                <td class="pt-3-half" contenteditable="true">{{ $marché->id }}</td>
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
                <td>
                <span class="table-remove"><a href="{{ route('marches.show' , $marché) }}" ><button type="button"
                        class="btn btn-primary btn-rounded btn-sm my-0 btn-lg btn-block" ><i class="material-icons ">edit</i></button></a></span>
                </td>

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

@endsection



