@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header"><h3>{{ $marché->reference }}</h3></div>
                <div class="card-body">
                                <p>  {{ $marché->description }} </p>
                <a href="{{ route('marches.edit', $marché) }}"><button class="center-content bg-dark" bg-secondary><i class="material-icons" style="color: blue" >mode_edit</i></button></a>
                <form action=" {{ route('marches.destroy' , $marché) }}" method="POST">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                  <button type="submit" class="btn-default"> <i class="material-icons" style="color:blue"> delete</i> </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
