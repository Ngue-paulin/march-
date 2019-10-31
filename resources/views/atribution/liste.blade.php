@extends('layouts.app')

@section('content')

        <div class="card" >
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4" style="color: cyan">Liste Des Marchés Attribués</h3>
     <div class="card-body">
            @if(count($atribution) > 0)
        <div id="table" class="table-editable">
<span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
        <table class="table table-borderless table-responsive-lg table-striped text-center">
            <thead class="thead-dark">
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Marchés</th>
                <th class="text-center">Controleurs</th>
                <th class="text-center">Prestataires</th>
                <th class="text-center">Delai_Livraison</th>
                <th class="text-center">Date_Livraison</th>
                <th class="text-center">Lieux_Livraison</th>
                <th class="text-center">Infos</th>
                <th class="text-center">Modifier_Infos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($atribution as $atribution)
            <tr>
                <td class="pt-3-half" contenteditable="true"><span class="badge" >{{ $atribution->id }}</span></td>
                <td class="pt-3-half" contenteditable="true">{{ $atribution->marche_id }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $atribution->users->name }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $atribution->prestataire_id }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $atribution->delai_livreson }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $atribution->date_livréson }}</td>
                <td class="pt-3-half" contenteditable="true">{{ $atribution->lieu_livreson }}</td>
                <td class="pt-3-half">
                <span class="table-up"><a href="{{ route('attributions.show' , $atribution) }}" ><button type="button"
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
             <section >
                To Update!!!
             </section>
             <footer class="cf">
             <a href="#fermer" class="btn droite" title="Fermer la fenêtre">Fermer</a>
             </footer>
        </div>
    </div>

@endsection



