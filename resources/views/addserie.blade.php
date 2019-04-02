@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <form method="POST" action="/insert" >

                    {{ csrf_field() }}
                    <input class="form-control name" name="name"   type="text" placeholder="Nom de la série">
                    <input class="form-control year" name="year"   type="text" placeholder="Année">
                    <input class="form-control dir"  name="director"  type="text" placeholder="Réalisateur">
                    <input class="form-control syn"  name="synopsys"  type="text" placeholder="Synopsis">
                    <input class="form-control season" name="number_of_seasons" type="number" placeholder="Nombre de saisons">
                    <input class="form-control url"    name="poster_url" type="text" placeholder="URL de l'image">

                    <input type="submit" class="btn btn-info" value="Ajouter">
                </form>
            </div>

            <a class="btn btn-info" href="{{route('home')}}"> Retour à l'accueil </a>

        </div>
    </div>

@endsection
